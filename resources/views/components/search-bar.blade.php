<div class="form-group row">
    <div class="col-md-12">
        <div class="input-group">
            <input type="search" name="search" id="" class="form-control"
                placeholder="Search here" :value="$search">
            <button class="btn btn-primary"><i class="fa fa-search"></i>Search</button>
            <a href="{{ url('/customer/view') }}">
                <button class="btn btn-primary" type="button"><i class="fa fa-reset"></i>Reset</button>
            </a>
        </div>
    </div>
</div>
