{{ csrf_field() }}
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
        <input type="text" id="name" name="name" value="{{ old('name', $category->name ?? '') }}" class="form-control" placeholder="Default Input">
        @if($errors->has('name'))
            <span class=help-block">{{ $errors->first('name') }}</span>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Parent Category</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
        <select name="parent_id" class="form-control">
            <option value="">Choose parent or leave empty</option>
            @foreach($categories as $_category)
                <option value="{{ $_category->id }}" {{ old('parent_id',  $category->parent_id ?? '') == $_category->id ? 'selected': '' }}>{{ $_category->name }}</option>
            @endforeach
        </select>
        @if($errors->has('parent_id'))
            <span class=help-block">{{ $errors->first('parent_id') }}</span>
        @endif
    </div>
</div>
<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
        <a href="{{ route('categories.index') }}">Cancel</a>
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</div>