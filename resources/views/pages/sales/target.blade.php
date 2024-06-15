@extends('layouts.app')

@section('css-content')
@endsection

@section('content')
    {{-- !------------------------------------------------------- --}}
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Content-->
        <div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
            <!--begin::Form-->
            <form class="form" action="#" id="kt_subscriptions_create_new">
                <!--begin::Payment method-->
                <div class="card card-flush pt-3 mb-5 mb-lg-10" data-kt-subscriptions-form="pricing">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2 class="fw-bold">เป้ายอดขาย และ คอมมิชชัน</h2>
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <a href="#" id="modal_toggle" class="btn btn-light-primary">กำหนดค่า</a>
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Name-->
                        <div class="fs-1 fw-bold text-primary">50,000</div>
                        <!--end::Name-->
                        <!--begin::Description-->
                        <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">เป้ายอดขาย</p>
                        <!--end::Description-->
                        <!-- /////////////////////////////// -->

                        <!--begin::Info-->
                        <div class="d-flex flex-wrap mb-5">
                            <!--begin::Due-->
                            <!-- <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                            <div class="fs-6 text-gray-800 fw-bold">Aug 19, 2023</div>
                                            <div class="fw-semibold text-gray-400">Due Date</div>
                                        </div> -->
                            <!--end::Due-->
                            <!--begin::Budget-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3 me-5">
                                <div class="fs-6 text-gray-800 fw-bold">฿5,000 - ฿10,000</div>
                                <div class="fw-semibold text-gray-400">ยอดขาย</div>
                            </div>
                            <!--end::Budget-->
                            <!--begin::Budget-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                <div class="fs-6 text-gray-800 fw-bold">10%</div>
                                <div class="fw-semibold text-gray-400">เปอร์เซ็นต์ค่าคอม</div>
                            </div>
                            <!--end::Budget-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Progress-->
                        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" aria-label="This project 20% completed" data-bs-original-title="This project 20% completed" data-kt-initialized="1">
                            <div class="bg-primary rounded h-4px" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!--end::Progress-->
                        <!--begin::Users-->
                        <div class="symbol-group symbol-hover mb-10">
                            <!--begin::User-->
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Emma Smith" data-bs-original-title="Emma Smith" data-kt-initialized="1">
                                <img alt="Pic" src="{{ url('assets/media/avatars/300-6.jpg') }}">
                            </div>
                            <!--begin::User-->
                            <!--begin::User-->
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Rudy Stone" data-bs-original-title="Rudy Stone" data-kt-initialized="1">
                                <img alt="Pic" src="{{ url('assets/media/avatars/300-1.jpg') }}">
                            </div>
                            <!--begin::User-->
                        </div>
                        <!--end::Users-->

                        <!-- /////////////////////////////// -->

                        <!--begin::Info-->
                        <div class="d-flex flex-wrap mb-5">
                            <!--begin::Due-->
                            <!-- <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                            <div class="fs-6 text-gray-800 fw-bold">Aug 19, 2023</div>
                                            <div class="fw-semibold text-gray-400">Due Date</div>
                                        </div> -->
                            <!--end::Due-->
                            <!--begin::Budget-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3 me-5">
                                <div class="fs-6 text-gray-800 fw-bold">฿10,001 - ฿20,000</div>
                                <div class="fw-semibold text-gray-400">ยอดขาย</div>
                            </div>
                            <!--end::Budget-->
                            <!--begin::Budget-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                <div class="fs-6 text-gray-800 fw-bold">15%</div>
                                <div class="fw-semibold text-gray-400">เปอร์เซ็นต์ค่าคอม</div>
                            </div>
                            <!--end::Budget-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Progress-->
                        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" aria-label="This project 50% completed" data-bs-original-title="This project 50% completed" data-kt-initialized="1">
                            <div class="bg-primary rounded h-4px" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!--end::Progress-->
                        <!--begin::Users-->
                        <div class="symbol-group symbol-hover mb-10">
                            <!--begin::User-->
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Emma Smith" data-bs-original-title="Emma Smith" data-kt-initialized="1">
                                <img alt="Pic" src="{{ url('assets/media/avatars/300-6.jpg') }}">
                            </div>
                            <!--begin::User-->
                            <!--begin::User-->
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Rudy Stone" data-bs-original-title="Rudy Stone" data-kt-initialized="1">
                                <img alt="Pic" src="{{ url('assets/media/avatars/300-1.jpg') }}">
                            </div>
                            <!--begin::User-->
                            <!--begin::User-->
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                            </div>
                            <!--begin::User-->
                        </div>
                        <!--end::Users-->

                        <!-- /////////////////////////////// -->

                        <!--begin::Info-->
                        <div class="d-flex flex-wrap mb-5">
                            <!--begin::Due-->
                            <!-- <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                            <div class="fs-6 text-gray-800 fw-bold">Aug 19, 2023</div>
                                            <div class="fw-semibold text-gray-400">Due Date</div>
                                        </div> -->
                            <!--end::Due-->
                            <!--begin::Budget-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3 me-5">
                                <div class="fs-6 text-gray-800 fw-bold">฿20,001 - ฿40,000</div>
                                <div class="fw-semibold text-gray-400">ยอดขาย</div>
                            </div>
                            <!--end::Budget-->
                            <!--begin::Budget-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                <div class="fs-6 text-gray-800 fw-bold">20%</div>
                                <div class="fw-semibold text-gray-400">เปอร์เซ็นต์ค่าคอม</div>
                            </div>
                            <!--end::Budget-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Progress-->
                        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" aria-label="This project 20% completed" data-bs-original-title="This project 20% completed" data-kt-initialized="1">
                            <div class="bg-primary rounded h-4px" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!--end::Progress-->
                        <!--begin::Users-->
                        <div class="symbol-group symbol-hover mb-10">
                            <!--begin::User-->
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Emma Smith" data-bs-original-title="Emma Smith" data-kt-initialized="1">
                                <img alt="Pic" src="{{ url('assets/media/avatars/300-6.jpg') }}">
                            </div>
                            <!--begin::User-->
                            <!--begin::User-->
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Rudy Stone" data-bs-original-title="Rudy Stone" data-kt-initialized="1">
                                <img alt="Pic" src="{{ url('assets/media/avatars/300-1.jpg') }}">
                            </div>
                            <!--begin::User-->
                        </div>
                        <!--end::Users-->
                    </div>

                    <!--end::Card body-->
                </div>
                <!--end::Payment method-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
    {{-- !------------------------------------------------------- --}}
@endsection

@section('modal-content')
    <div class="modal fade" id="modal_sele_target" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>กำหนดเป้ายอดขาย และ คอมมิชชัน</h2>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <form id="modal_sele_target_form" class="form" action="#" autocomplete="off">
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                <span class="required">เป้ายอดขาย</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="ตั้งเป้ายอดการขายที่ต้องการ (บาท)">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="50,000" />
                        </div>
                        <h4 class="mb-5">ตั้งเปอร์เซ็นค่าคอมมิชชัน</h4>
                        <div class="form-group">
                            <div data-repeater-list="data">
                                <div data-repeater-item>
                                    <div class="fv-row form-group row mb-5">
                                        <div class="col-md-3">
                                            <label class="form-label">% ค่าคอม</label>
                                            <input type="text" class="form-control mb-2 mb-md-0" name="percent" placeholder="0" value=""/>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">ยอดขายเริ่มต้น</label>
                                            <input type="number" class="form-control mb-2 mb-md-0" name="start_sales" placeholder="0" value=""/>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">ยอดขายสูงสุด</label>
                                            <input type="number" class="form-control mb-2 mb-md-0" name="max_sales" placeholder="0" value=""/>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-flex flex-center btn-light-danger mt-3 mt-md-9">
                                                <i class="ki-duotone ki-trash fs-5">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="javascript:;" data-repeater-create class="btn btn-flex flex-center btn-light-primary">
                                <i class="ki-duotone ki-plus fs-3"></i> เพิ่ม
                            </a>
                        </div>
                        <div class="text-center pt-15">
                            <button type="reset" id="modal_sele_target_cancel" class="btn btn-light me-3">ยกเลิก</button>
                            <button type="submit" id="modal_sele_target_submit" class="btn btn-primary">
                                <span class="indicator-label">บันทึก</span>
                                <span class="indicator-progress">รอสักครู่...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js-content')
    <script src="{{ asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="{{ asset('assets/js-external/sales/target.js') }}"></script>
@endsection
