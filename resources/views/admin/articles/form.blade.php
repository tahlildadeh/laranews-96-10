{{ csrf_field() }}
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="category_id">Category</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
        <select id="category_id" name="category_id" class="form-control">
            <option value="">Choose category</option>
            @foreach($categories as $_category)
                <option value="{{ $_category->id }}" {{ old('category_id',  $category->category_id ?? '') == $_category->id ? 'selected': '' }}>{{ $_category->name }}</option>
            @endforeach
        </select>
        @if($errors->has('category_id'))
            <span class=help-block">{{ $errors->first('category_id') }}</span>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
        <input type="text" id="title" name="title" value="{{ old('title', $category->title ?? '') }}" class="form-control" placeholder="Default Input">
        @if($errors->has('title'))
            <span class=help-block">{{ $errors->first('title') }}</span>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="excerpt">Excerpt</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
        <textarea id="excerpt" name="excerpt" class="form-control">{{ old('excerpt', $category->excerpt ?? '') }}</textarea>
        @if($errors->has('excerpt'))
            <span class=help-block">{{ $errors->first('excerpt') }}</span>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="excerpt">Content</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
        <textarea id="content" name="content" class="form-control">{{ old('content', $category->content ?? '') }}</textarea>
        @if($errors->has('content'))
            <span class=help-block">{{ $errors->first('content') }}</span>
        @endif
    </div>
</div>
<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
        <a href="{{ route('articles.index') }}">Cancel</a>
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</div>

