<form action="{{ route('update',  $category->id) }}" method="post" autocomplete="off" enctype="multipart/form-data"
    role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-4 form-group">
            <input type="file" name="image" class="form-control" id="image" required>
        </div>
        <div class="text-center"><button type="submit">save</button></div>
</form>