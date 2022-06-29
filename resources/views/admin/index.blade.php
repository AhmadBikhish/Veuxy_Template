@extends('admin.layouts.master')

@section('page-css')
    <title>داشبورد</title>
@endsection

@section('content')
    <h4>داشبورد</h4>

    <section class="mt-2" id="dashboard-ecommerce">
        <div class="row match-height">

            <!-- Medal Card -->
            <div class="col-xl-4 col-md-6 col-12">
                <div class="card card-congratulation-medal">
                    <div class="card-body">
                        <h5>تبریک 🎉 جان!</h5>
                        <p class="card-text font-small-3">شما مدال طلایی گرفتید.</p>
                        <h3 class="mb-75 mt-2 pt-50">
                            <a href="#">$48.9k</a>
                        </h3>
                        <button type="button" class="btn btn-primary">مشاهده تخفیف ها</button>
                        <img src="{{ asset('admin-assets/app-assets/images/illustration/badge.svg') }}" class="congratulation-medal" alt="Medal Pic" />
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
