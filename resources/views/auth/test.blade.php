<div class="row mb-3">
    <label for="email"
        class="col-md-4 col-form-label text-md-end">{{ __('تاریخ تولد') }}</label>

    <div class="col-md-6">
        <input id="BirthDay" type="text"
            class="form-control @error('BirthDay') is-invalid @enderror" name="BirthDay"
            value="{{ old('BirthDay') }}" required autocomplete="name" autofocus>
        <input type="date" id="BirthDayView" class="form-control form-control-sm">
        @error('BirthDay')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#published_at_view').persianDatepicker({
            $('#BirthDay').persianDatepicker({
                format: 'YYYY/MM/DD',
                altField: '#published_at'
            })
        })
    });
</script>
