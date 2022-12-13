@extends('backend.app')
@section('container')
    <form class="" method="post" autocomplete="off" action="{{ route('job-position.store') }}"
        enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 ml-2">
                                <h2 class="b">Information</h2>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Title') }}</label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}"
                                        required>
                                </div>
                            </div>
                            {{--  <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Vacancy') }}</label>
                                    <select class="form-control select2" name="vacancy" data-selected="{{ old('vacancy') }}"
                                        required>
                                        <option value="">{{ _lang('Select One') }}</option>
                                        <option value="1">{{ _lang('01') }}</option>
                                        <option value="2">{{ _lang('02') }}</option>
                                        <option value="3">{{ _lang('03') }}</option>
                                        <option value="4">{{ _lang('04') }}</option>
                                        <option value="5">{{ _lang('05') }}</option>
                                    </select>
                                </div>
                            </div>  --}}

                            {{--  <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Duration Type') }}</label>
                                    <select class="form-control select2" name="duration_type"
                                        data-selected="{{ old('duration_type', 'day') }}" required>
                                        <option value="day">{{ _lang('Daily') }}</option>
                                        <option value="month">{{ _lang('Monthly') }}</option>
                                        <option value="year">{{ _lang('Yearly') }}</option>
                                    </select>
                                </div>
                            </div>  --}}


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Company Name') }}</label>
                                    <input type="text" class="form-control" name="company_name"
                                        value="{{ old('company_name') }} RootDevs" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Location') }}</label>
                                    <input type="text" class="form-control" name="location"
                                        value="{{ old('location') }} Dhaka, Bangladesh" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Vacancy') }}</label>
                                    <input type="text" class="form-control" name="vacancy" value="{{ old('vacancy') }}"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Date') }}</label>
                                    <input type="date" class="form-control" name="date" required
                                        value="{{ old('date') }}" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Address') }}</label>
                                    <input type="text" class="form-control" name="address" value="{{ old('address') }}"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Experience') }}</label>
                                    <input type="text" class="form-control" name="experience"
                                        value="{{ old('address') }} Minimun 1 Year" required>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Work Level') }}</label>
                                    <select class="form-control select2" name="work_level"
                                        data-selected="{{ old('work_level') }}" required>
                                        <option value="">{{ _lang('Select One') }}</option>
                                        <option value="senior management">{{ _lang('senior Level') }}</option>
                                        <option value="Middle management">{{ _lang('Middle management') }}</option>
                                        <option value="First-level management">{{ _lang('First-level management') }}
                                        </option>
                                        <option value="Entry-level.">{{ _lang('Entry-level') }}</option>
                                        <option value="Intermediate or experienced ">
                                            {{ _lang('Intermediate or experienced ') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Employee') }}</label>
                                    <select class="form-control select2" name="job_time"
                                        data-selected="{{ old('job_time') }}" required>
                                        <option value="">{{ _lang('Select One') }}</option>
                                        <option selected value="Full Time Job">{{ _lang('Full Time Job') }}</option>
                                        <option value="part time job">{{ _lang('part time job') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Offer Salary') }}</label>
                                    <input type="text" class="form-control" name="salary"
                                        value="{{ old('salary') }}  BDT / Month" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Status') }}</label>
                                    <select class="form-control select2" name="status" required>
                                        <option value="1">{{ _lang('Active') }}</option>
                                        <option value="0">{{ _lang('In-Active') }}</option>
                                    </select>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-12 ml-2">
                                <h2 class="b">Description</h2>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Overview</label>
                                    <textarea name="overview" id="" class="w-100" rows="5">{{ old('overview') }}</textarea>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Educational Requirements</label>
                                    <textarea name="requirements" id="" class="w-100" rows="5">{{ old('requirements') }}</textarea>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row field_group my-2">
                                    <div class="col-md-12">
                                        <div class="form-group text-right">
                                            <button class="btn btn-danger remove-row btn-sm text-white mt-1">-</button>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Job Requirements:</label>
                                            <input type="text" class="form-control"
                                                value="{{ old('overview_list[]') }}" name="overview_list[]"
                                                value="" required="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12 ml-1">
                                <div class="form-group text-right">
                                    <button type="button" class="btn btn-primary add-more btn-sm" data-team="LR56SVES0">
                                        Add New
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="reset" class="btn btn-danger btn-sm">{{ _lang('Reset') }}</button>
                                    <button type="submit" class="btn btn-primary btn-sm">{{ _lang('Save') }}</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="d-none">
        <div class="field_group repeat col-md-12">
            <div class="row my-2">
                <div class="col-md-12">
                    <div class="form-group text-right">
                        <button class="btn btn-danger remove-row btn-sm text-white mt-1">-</button>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        {{--  <label class="control-label">list</label>  --}}
                        <input type="text" class="form-control" value="{{ old('overview_list[]') }}"
                            name="overview_list[]" required="">
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script type="text/javascript">
        $(document).on('click', '.add-more', function() {
            var form = $('.repeat').clone().removeClass('repeat');
            form.find('.image').dropify();
            $(this).closest('.col-md-12').before(form);
        });

        $(document).on('click', '.remove-row', function() {
            $(this).closest('.field_group').remove();
        });
    </script>
@endsection
