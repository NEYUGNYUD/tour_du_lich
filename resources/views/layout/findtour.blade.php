<div class="box box_border">
    <h3>Tiêu chí tìm tour</h3>
    <form class="form-horizontal" action="" method="POST">
        <div class="form-group">
            <div class="col-sm-12">
                <label>Chọn loại tour</label>
                <select class="form-control">
                    <option>Loại tour</option>
                    <option>Tour đoàn thể</option>
                    <option>Tour gia đình</option>
                    <option>Tour chuyên đề</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <label for="amount">Chọn khoảng giá</label>
                <input type="text" id="amount" readonly>
                <div id="slider-range"></div>
            </div>
        </div>
        <!-- <div class="form-group">
            <div class="col-sm-12">
                <label>Chọn đánh giá</label>
                <fieldset class="rating">
                    <input type="radio" id="star5" name="rating" value="5" />
                    <label class = "full" for="star5" title="5 sao"></label>

                    <input type="radio" id="star4half" name="rating" value="4.5" />
                    <label class="half" for="star4half" title="4.5 sao"></label>

                    <input type="radio" id="star4" name="rating" value="4" />
                    <label class = "full" for="star4" title="4 sao"></label>

                    <input type="radio" id="star3half" name="rating" value="3.5" />
                    <label class="half" for="star3half" title="3.5 sao"></label>

                    <input type="radio" id="star3" name="rating" value="3" />
                    <label class = "full" for="star3" title="3 sao"></label>

                    <input type="radio" id="star2half" name="rating" value="2.5" />
                    <label class="half" for="star2half" title="2.5 sao"></label>

                    <input type="radio" id="star2" name="rating" value="2" />
                    <label class = "full" for="star2" title="2 sao"></label>

                    <input type="radio" id="star1half" name="rating" value="1.5" />
                    <label class="half" for="star1half" title="1.5 sao"></label>

                    <input type="radio" id="star1" name="rating" value="1" />
                    <label class = "full" for="star1" title="1 star"></label>

                    <input type="radio" id="starhalf" name="rating" value="half" />
                    <label class="half" for="starhalf" title="0.5 sao"></label>
                </fieldset>
            </div>
        </div> -->
        <div class="form-group">
            <div class="col-sm-12">
                <label>Chọn dịch vụ</label>
                <div id="ultilites">

                    <?php $i = 1; ?>
                    @foreach($tourServices as $service)
                        <div class="checkbox checkbox-success">
                            <input id="<?php echo 'checkbox'.$i;?>" name="tourServices[]" type="checkbox" value="{{$service->service_id}}">
                            <label for="<?php echo 'checkbox'.$i;?>">{{$service->service_name}}</label>
                        </div>
                        <?php ++$i; ?>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12 text-right">
                <button type="submit" class="btn btn_submit btn_filter">Lọc kết quả</button>
            </div>
        </div>
    </form>
</div>