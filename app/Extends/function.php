<?php
use App\Place;
use Illuminate\Support\Facades\DB;
// đường dẫn theme
function getUrlThemeActive(){
    $urlThemeActive = URL::to('/').'/public/';
    echo $urlThemeActive;
}

function haveChild($id) {
    $num = DB::table('tbl_places')->where('parent_id', '=', $id)->count();
    if($num != NULL) {
        return true;
    }
    return false;
}
function stripUnicode($str){
    if(!$str) return false;
    $unicode = array(
        'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
        'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
        'd'=>'đ',
        'D'=>'Đ',
        'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
        'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
        'i'=>'í|ì|ỉ|ĩ|ị',
        'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
        'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
        'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
        'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
        'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
        'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
        'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
    );

    foreach($unicode as $khongdau=>$codau) {
        $arr=explode("|",$codau);
        $str = str_replace($arr,$khongdau,$str);
    }
    return $str;
}
//Tạo slug
function createSlug($str){
    $str = trim($str);
    if($str=="") return "";
    $str = str_replace('"','',$str);
    $str = str_replace("'",'',$str);
    $str = str_replace("/",'',$str);
    $str = stripUnicode($str);
    $str = mb_convert_case($str,MB_CASE_LOWER,'utf-8');
    // MB_CASE_Upper / MB_CASE_TITLE / MB_CASE_LOWER
    $str = str_replace(' ','-',$str);
    return $str;

}

function showCategories($categories, $parent_id = 0, $char = '') {
    // BƯỚC 2.1: LẤY DANH SÁCH CATE CON
    $cate_child = array();
    foreach ($categories as $key => $item) {
        // Nếu là chuyên mục con thì hiển thị
        if ($item->parent_id == $parent_id) {
            $cate_child[] = $item;
            unset($categories[$key]);
        }
    }
    // BƯỚC 2.2: HIỂN THỊ DANH SÁCH CHUYÊN MỤC CON NẾU CÓ
    if ($cate_child) {
        foreach ($cate_child as $key => $item) {
            // Hiển thị tiêu đề chuyên mục
            echo "<li><a href = 'listtour/$item->place_id'>Du Lịch ".$item->place_name.'</a>';
            echo "<ul style = 'width: auto;'>";
            // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
            showCategories($categories, $item->place_id,"");
            echo "</ul>";
            echo '</li>';
        }
    }
}

//đệ quy category
function cate_parent($data,$parent=0,$str="",$select=0){
    foreach($data as $item){
        $id = $item->place_id;
        $name = $item->place_name;
        if($item->parent_id == $parent){
            if($select!=0 && $id == $select ){
                echo "<option value='$id' selected>$str"."$name</option>";
            }else{
                echo "<option value='$id'>$str"."$name</option>";
            }
            cate_parent($data,$id,$str."&nbsp;&nbsp;--&nbsp;",$select);
        }
    }
}


function test($data,$parent=0,$str="",$select=0){
    // var_dump(haveChild(4)); die();
    foreach($data as $item){
        if($item->parent_id == $parent){
            if(haveChild($parent) == true || $parent == 0){
                echo "<option value='$item->place_id' class='haveChild'><strong>$str"."$item->place_name&#x21B4;</strong></option>";
            }else{
                echo "<option value='$item->place_id' class='noChild'>$str"."$item->place_name</option>";
            }
            cate_parent($data,$item->place_id,$str."&nbsp;&nbsp;&nbsp;&nbsp;",$select);
        }
    }
}
?>

<?php
//Nhúng upload file
function showUploadFile($idInput = '', $nameInput = '', $value = '', $number = '') { ?>
    <script src="http://localhost/tour_v2/public/include/ckfinder/ckfinder.js" ></script>
    <script type="text/javascript">
    function BrowseServerImg<?php echo $number; ?>() {
        var finder = new CKFinder();
        //finder.basePath = '../';
        finder.selectActionFunction = SetFileFieldImg<?php echo $number; ?>;
        finder.popup();
    }

    function SetFileFieldImg<?php echo $number; ?>(fileUrl) {
        document.getElementById('<?php echo $idInput; ?>').value = fileUrl;
    }
    </script>
    <input style="float: left;" type="text" class="form-control" placeholder="Chọn ảnh" name="<?php echo $nameInput; ?>" id='<?php echo $idInput; ?>' value="<?php echo $value; ?>" />
    <input type="button" class="btn btn-default" value="Lựa chọn" onclick="BrowseServerImg<?php echo $number; ?>();" />
    <?php
}
?>
<?php
//Nhúng trình soạn thảo
function showEditorInput($idEditor = '', $nameEditor = '', $content = '', $class = '') { ?>
    <script language="javascript" src="http://localhost/tour_v2/public/include/ckeditor/ckeditor.js" type="text/javascript"></script>
    <textarea style="border: 1px solid #abadb3;height: auto;" class="form-control"  id="<?php echo $idEditor; ?>" name="<?php echo $nameEditor; ?>" class="<?php echo $class;?>" ><?php echo $content; ?></textarea>
    <script type="text/javascript">CKEDITOR.replace('<?php echo $idEditor; ?>');</script>
    <?php
}
?>
