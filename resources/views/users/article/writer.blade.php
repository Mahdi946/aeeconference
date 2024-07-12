@extends('templates.fa')
@section('content')
    <div class="container form-group">
        <!-- Start Login Area -->
        <div class="login-section ptb-100">

            <!-- Start Signup Area -->
            <div class="signup-section ptb-50">
                <div class="container">
                    <div class="signup-form" style="max-width: 800px;">
                        <h3>تعریف نویسنده</h3>


                        <div class="container mt-5">
                            <form action="" method="POST">
                                @csrf
                                <input type="hidden" name="ArticleID" value="{{ $article->id }}" id="ArticleID" />
                                <input type="hidden" name="UserID" value="" id="writerUserID" />
                                <div class="row">
                                    <!-- Input fields -->

                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">{{ __('ایمیل') }}</label>
                                        <div class="input-group">
                                            <input name="email" type="text" onblur="writerCheck()" class="form-control" id="writerEmail">
                                            <a href="javascript:writerCheck()" id="checkEmail" class="btn btn-primary">بررسی</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Name_fa" class="form-label">{{ __('نام') }}</label>
                                        <input name="Name_fa" type="text" class="form-control" id="writerName_fa" disabled>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Family_fa" class="form-label">{{ __('نام خانوادگی') }}</label>
                                        <input name="Family_fa" type="text" class="form-control" id="writerFamily_fa" disabled>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Name" class="form-label">{{ __('Name') }}</label>
                                        <input name="Name" type="text" class="form-control" id="writerName" disabled>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Family" class="form-label">{{ __('Last Name') }}</label>
                                        <input name="Family" type="text" class="form-control" id="writerFamily" disabled>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="MobileNumber" class="form-label">{{ __('موبایل') }}</label>
                                        <input name="MobileNumber" type="text" class="form-control" id="writerMobileNumber" disabled>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="PhoneNumber" class="form-label">{{ __('تلفن') }}</label>
                                        <input name="PhoneNumber" type="text" class="form-control" id="writerPhoneNumber" disabled>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Country" class="form-label">{{ __('کشور') }}</label>
                                        <input name="Country" type="text" class="form-control" id="writerCountry" disabled>
                                    </div>
                                    <div class="col-md-6 mb-3"></div>
                                    <div class="col-md-6 mb-3">
                                        <label for="City_fa" class="form-label">{{ __('شهر') }}</label>
                                        <input name="City_fa" type="text" class="form-control" id="writerCity_fa" disabled>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="City" class="form-label">{{ __('City') }}</label>
                                        <input name="City" type="text" class="form-control" id="writerCity" disabled>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Edu" class="form-label">{{ __('مقطع تحصیلی') }}</label>
                                        <input name="Edu" type="text" class="form-control" id="writerEdu" disabled>
                                    </div>
                                    {{-- ///////////// --}}
                                    <div class="col-md-6 mb-3">
                                        <label for="Field" class="form-label">{{ __(' رشته-فارسی') }}</label>
                                        <input name="Field" type="text" class="form-control" id="writerField" disabled>
                                    </div>
                                    {{-- /////////////////// --}}
                                    <div class="col-md-6 mb-3">
                                        <label for="Rank" class="form-label">{{ __('رتبه علمی') }}</label>
                                        <input name="Rank" type="text" class="form-control" id="writerRank" disabled>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Org_fa" class="form-label">{{ __('وابستگی سازمانی') }}</label>
                                        <input name="Org_fa" type="text" class="form-control" id="writerOrg_fa" disabled>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Org" class="form-label">{{ __('Organisation') }}</label>
                                        <input name="Org" type="text" class="form-control" id="writerOrg" disabled>
                                    </div>
                                    <button type="submit" id="addWriter" class="btn btn-primary">ثبت</button>
                                </div>
                                <div class="row">
                                    <span id="Writers"></span>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    </div>
    </div>


    </div>
    <!-- End Signup Area -->

    <div class="default-shape">
        <div class="shape-1">
            <img src="/assets-rtl/img/shape/4.png" alt="image">
        </div>

        <div class="shape-2 rotateme">
            <img src="/assets-rtl/img/shape/5.svg" alt="image">
        </div>

        <div class="shape-3">
            <img src="/assets-rtl/img/shape/6.svg" alt="image">
        </div>

        <div class="shape-4">
            <img src="/assets-rtl/img/shape/7.png" alt="image">
        </div>

        <div class="shape-5">
            <img src="/assets-rtl/img/shape/8.png" alt="image">
        </div>
    </div>
    </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            getWriters();
        });
    function writerCheck(){
        writerEmail = $('#writerEmail').val();
        $.ajax({url: "/Writers/getEmailWriter/" + writerEmail, success: function(result){
            console.log(result);
            if(result.id){
                $('#writerUserID').val(result.id);
                $('#writerName_fa').val(result.Name_fa);
                $('#writerFamily_fa').val(result.Family_fa);
                $('#writerName').val(result.Name);
                $('#writerFamily').val(result.Family);
                $('#writerMobileNumber').val(result.MobileNumber);
                $('#writerPhoneNumber').val(result.PhoneNumber);
                $('#writerField').val(result.Field);
                $('#writerRank').val(result.Rank);
                $('#writerEdu').val(result.Edu);
                $('#writerCity').val(result.City);
                $('#writerCity_fa').val(result.City_fa);
                $('#writerCountry').val(result.Country);
                $('#writerOrg').val(result.Org);
                $('#writerOrg_fa').val(result.Org_fa);
            }else{
                $('#writerUserID').val('');
                $('#writerName_fa').val('').removeAttr('disabled');
                $('#writerFamily_fa').val('').removeAttr('disabled');
                $('#writerName').val('').removeAttr('disabled');
                $('#writerFamily').val('').removeAttr('disabled');
                $('#writerMobileNumber').val('').removeAttr('disabled');
                $('#writerPhoneNumber').val('').removeAttr('disabled');
                $('#writerField').val('').removeAttr('disabled');
                $('#writerRank').val('').removeAttr('disabled');
                $('#writerEdu').val('').removeAttr('disabled');
                $('#writerCity').val('').removeAttr('disabled');
                $('#writerCity_fa').val('').removeAttr('disabled');
                $('#writerCountry').val('').removeAttr('disabled');
                $('#writerOrg').val('').removeAttr('disabled');
                $('#writerOrg_fa').val('').removeAttr('disabled');
            }

        }});
    }


    // Function to create and display the table
    function createTable(data) {
        const tableContainer = $('#Writers');
        const table = $('<table></table>');
        const thead = $('<thead></thead>');
        const tbody = $('<tbody></tbody>');

        // Create table header
        const headers = {
            'Name': 'نام',
            'Family': 'نام خانوادگی',
            'Email': 'ایمیل'
        };
        const headerRow = $('<tr></tr>');
        headers.forEach(header => {
            const th = $('<th></th>').text(header);
            headerRow.append(th);
        });
        thead.append(headerRow);

        // Create table rows
        data.forEach(item => {
            const row = $('<tr></tr>');
            headers.forEach(header => {
                const td = $('<td></td>').text(item[header.toLowerCase()]);
                row.append(td);
            });
            tbody.append(row);
        });

        table.append(thead);
        table.append(tbody);
        tableContainer.append(table);
    }

    function getWriters(){
        ArticleID = $('#ArticleID').val();
        $.ajax({url: "/Writers/getWritersByID/" + ArticleID,
            success: function(result){
                console.log(result);
                createTable(result);
            },
            error: function() {
                console.error('Failed to fetch data');
            }
        });
    }
    </script>
@endSection
