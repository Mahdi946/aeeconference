<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<div class="container mt-5">
    <form>
        <div class="row">
            <!-- Input fields -->
            <div class="col-md-6 mb-3">
                <label for="input1" class="form-label">{{ __('عنوان(کامل)') }}</label>
                <input name="FullTitle" type="text" class="form-control" value="{{ old('FullTitle') }}" id="FullTitle">
            </div>
            <div class="col-md-6 mb-3">
                <label for="ShortTitle" class="form-label">{{ __('عنوان(خلاصه)') }}</label>
                <input name="ShortTitle" type="text" class="form-control" value="{{ old('ShortTitle') }}" id="ShortTitle">
            </div>
            <div class="col-md-6 mb-3">
                <label for="FullTitle_fa" class="form-label">{{ __('عنوان کامل(فارسی)') }}</label>
                <input name="FullTitle_fa" type="text" class="form-control" value="{{ old('FullTitle_fa') }}" id="FullTitle_fa">
            </div>
            <div class="col-md-6 mb-3">
                <label for="ShortTitle_fa" class="form-label">{{ __('عنوان (خلاصه-فارسی)') }}</label>
                <input name="ShortTitle_fa" type="text" class="form-control" value="{{ old('ShortTitle_fa') }}" id="ShortTitle_fa">
            </div>
            <div class="col-md-6 mb-3">
                <label for="Tags" class="form-label">{{ __('تگ ها') }}</label>
                <input name="Tags" type="text" class="form-control" id="Tags" value="{{ old('Tags') }}">
            </div>
      
            <!-- Select options -->
            <div class="col-md-6 mb-3">
                <label for="select1" class="form-label">CongressID</label>
                <select name="CongressID" class="form-select" id="CongressID">
                    <option selected>Select an option</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="TypeID" class="form-label">نوع مقاله</label>
                <select class="form-select" id="TypeID">
                    <option selected>انتخاب کنید</option>
                    <option value="1">مقاله علمی پژوهشی</option>
                    <option value="2">مقاله پژوهشی</option>
                  
                </select>
            </div>

            <!-- Category Select with Add Option -->
            <div class="col-md-12 mb-3">
                <label for="CategoriesID" class="form-label">CategoriesID</label>
                <div class="input-group">
                    <select class="form-select" id="select3">
                        <option selected> دسته بندی</option>
                        <option value="1">CategoriesID 1</option>
                        <option value="2">CategoriesID2</option>
                        <option value="3">CategoriesID 3</option>
                    </select>
                    <input type="text" class="form-control" id="newCategory" placeholder="Add new category">
                    <button type="button" class="btn btn-outline-secondary" id="addCategoryButton">افزودن</button>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">ایجاد</button>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#addCategoryButton').on('click', function() {
            var newCategory = $('#newCategory').val();
            if (newCategory) {
                var select = $('#select3');
                var option = $('<option></option>').text(newCategory).val(newCategory);
                select.append(option);
                select.val(newCategory);
                $('#newCategory').val('');
            }
        });
    });
</script>