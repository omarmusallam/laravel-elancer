<div class="form-group">
    <label for="desc">Name</label>
    <x-form.input id="name" name="name" lable="Category Name" value="{{ $category->name }}" />
</div>

<div class="form-group">
    <label for="desc">Slug</label>
    <x-form.input id="slug" name="slug" lable="Category Slug" value="{{ $category->slug }}" />
</div>

<div class="form-group">
    <label for="desc">Description</label>
    <textarea type="text" name="desc" id="desc" class="form-control @error('desc') is-invalid @enderror">{{ old('desc', $category->desc) }}</textarea>
    @error('desc')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="desc">Parent Name</label>
    <x-form.select id="parent_id" name="parent_id" lable="Parent" :options="$parents->pluck('name', 'id')" :selected="$category->parent_id" />
</div>

<div class="form-group">
    <label for="art_file">Art File</label>
    <input type="file" name="art_file" id="art_file" class="form-control @error('art_file') is-invalid @enderror">
    @error('art_file')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <button class="btn btn-primary">Save</button>
</div>
