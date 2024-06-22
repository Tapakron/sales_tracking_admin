@php
    // dd($pageDetails['customer_succeed']);
@endphp
@extends('layouts.app')

@section('css-content')
@endsection

@section('content')
    {{-- !------------------------------------------------------- --}}
    <div class="d-flex flex-column gap-7 gap-lg-10">
        <div class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">
            <!--begin:::Tabs-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-lg-n2 me-auto">
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_summary">รายการลูกค้า</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_history">ชำระเงินแล้ว</a>
                </li>
                <!--end:::Tab item-->
            </ul>
            <!--end:::Tabs-->
        </div>
        <!--begin::Tab content-->
        <div class="tab-content">
            <!--begin::Tab pane-->
            <div class="tab-pane fade show active" id="kt_ecommerce_sales_order_summary" role="tab-panel">
                <!--begin::Orders-->
                <div class="d-flex flex-column gap-7 gap-lg-10 mt-5">
                    <!--begin::Tables Widget 2-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">ลูกค้าทั้งหมด</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">รวม {{ Count($pageDetails['customer_all']) }} รายการ</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                                    <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="ค้นหาลูกค้า" />
                                </div>
                                <!--end::Search-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <div class="table-responsive">
                                <table class="table align-middle gs-0 gy-5" id="table-01">
                                    <thead>
                                        <tr>
                                            <th class="p-0 w-50px"></th>
                                            <th class="p-0 min-w-150px"></th>
                                            <th class="p-0 min-w-150px"></th>
                                            <th class="p-0 min-w-125px"></th>
                                            <th class="p-0 min-w-40px"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (Count($pageDetails['customer_all']) > 0)
                                            @foreach ($pageDetails['customer_all'] as $item)
                                                @php
                                                    if ($item['customer_img'] != null) {
                                                        $img = $item['customer_img'];
                                                    } else {
                                                        $img = '/assets/media/avatars/300-6.jpg';
                                                    }
                                                @endphp
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                <a href="{{ url('/projects') }}">
                                                                    <div class="symbol-label">
                                                                        <img src="{{ asset($img) }}" alt="{{ $item['customer_name'] }}" class="w-100" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $item['customer_name'] }}</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">{{ $item['company_name'] }}</span>
                                                        <span class="text-muted fw-semibold d-block fs-7">Sale: {{ $item['sale_name'] }}</span>
                                                    </td>
                                                    <td class="text-end">
                                                        @if (Count($item['products']) > 0)
                                                            @foreach ($item['products'] as $products)
                                                                @switch($products["product_id"])
                                                                    @case(1)
                                                                        <div class="badge badge-light-primary fw-semibold me-1">{{ $products['product_short_name'] }}</div>
                                                                    @break

                                                                    @case(2)
                                                                        <div class="badge badge-light-nc fw-semibold me-1">{{ $products['product_short_name'] }}</div>
                                                                    @break

                                                                    @case(3)
                                                                        <div class="badge badge-light-primary fw-semibold me-1">{{ $products['product_short_name'] }}</div>
                                                                    @break

                                                                    @case(4)
                                                                        <div class="badge badge-light-warning fw-semibold me-1">{{ $products['product_short_name'] }}</div>
                                                                    @break

                                                                    @default
                                                                        <div class="badge badge-light-primary fw-semibold me-1">{{ $products['product_short_name'] }}</div>
                                                                @endswitch
                                                            @endforeach
                                                        @endif
                                                    </td>
                                                    <td class="text-end">
                                                        <div href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">ติดต่อล่าสุด</div>
                                                        <span class="text-muted fw-semibold d-block fs-7">{{ $item['last_contact_date'] }}</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="javascript:;" data-btn-toggle="createInvoice" data-customer-id="{{ $item['customer_id'] }}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-outline ki-arrow-right fs-2"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <form id="frm_redirect_page" method="post" action="{{ route('invoices.create') }}">
                                @csrf
                                <input type="hidden" id="customer_id" name="customer_id" value="">
                            </form>
                        </div>
                        <!--end::Body-->

                    </div>
                    <!--end::Tables Widget 2-->
                </div>
                <!--end::Orders-->
            </div>
            <!--end::Tab pane-->
            <!--begin::Tab pane-->
            <div class="tab-pane fade" id="kt_ecommerce_sales_order_history" role="tab-panel">
                <!--begin::Orders-->
                <div class="d-flex flex-column gap-7 gap-lg-10 mt-5">
                    <!--begin::Order history-->
                    <div class="card card-flush py-4 flex-row-fluid">
                        <!--begin::Card header-->
                        <div class="card-header border-0">
                            <!--begin::Card title-->
                            <div class="card-title flex-column">
                                <h2 class="mb-1">ประวัติการขาย</h2>
                                <div class="fs-6 text-gray-400">ทั้งหมด {{ Count($pageDetails['customer_succeed']) }} รายการ</div>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0 pb-5">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed gy-5" id="table-02">
                                <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                                    <tr class="text-start text-muted text-uppercase gs-0">
                                        <th class="min-w-130px">ชื่อลูกค้า</th>
                                        <th class="min-w-60px">ผู้ขาย</th>
                                        <th>โปรแกรม</th>
                                        <th>ราคา</th>
                                        <th>วันที่ขาย</th>
                                        <th>รูปสลิป</th>
                                        <th>รูปใบเสร็จ</th>
                                        <th class="text-center">รายละเอียด</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-6 fw-semibold text-gray-600">
                                    @if (Count($pageDetails['customer_succeed']) > 0)
                                        {{-- @php
                                        dd($pageDetails['customer_succeed']);
                                    @endphp --}}
                                        @foreach ($pageDetails['customer_succeed'] as $item)
                                            <tr>
                                                <td>
                                                    <a href="{{ url('/projects') }}" class="text-gray-600 text-hover-primary mb-1">{{ $item['customer_name'] }}</a>
                                                </td>
                                                <td>{{ $item['seller_name'] }}</td>
                                                <td>
                                                    @foreach ($item['products_buy'] as $productsItem)
                                                        @switch($productsItem["product_id"])
                                                            @case(1)
                                                                <div class="badge badge-light-primary fw-semibold me-1">{{ $productsItem['product_name'] }}</div>
                                                            @break

                                                            @case(2)
                                                                <div class="badge badge-light-nc fw-semibold me-1">{{ $productsItem['product_name'] }}</div>
                                                            @break

                                                            @case(3)
                                                                <div class="badge badge-light-primary fw-semibold me-1">{{ $productsItem['product_name'] }}</div>
                                                            @break

                                                            @case(4)
                                                                <div class="badge badge-light-warning fw-semibold me-1">{{ $productsItem['product_name'] }}</div>
                                                            @break

                                                            @default
                                                                <div class="badge badge-light-primary fw-semibold me-1">{{ $productsItem['product_name'] }}</div>
                                                        @endswitch
                                                    @endforeach
                                                </td>
                                                <td>฿{{ $item['sum_total'] }}</td>

                                                <td>{{ $item['payment_at'] }}</td>
                                                <td>
                                                    <a href="{{ url('/invoices/view/image/slip/'.$item['payment_id']) }}" target="_blank" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto">
                                                        <i class="ki-duotone ki-some-files fs-2 ms-0">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </a>
                                                </td>
                                                <td>
                                                    @if ($item['img_receipt'] != null)
                                                        <a href="{{ url('/invoices/view/image/receipt/'.$item['payment_id']) }}" class="btn btn-icon btn-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_view_target">
                                                            <i class="ki-duotone ki-some-files fs-2 ms-0">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </a>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="" data-btn-toggle="fetchInvoices" data-payment-id="{{ $item['payment_id'] }}">รายละเอียด</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                    @endif
                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Order history-->
                </div>
                <!--end::Orders-->
            </div>
            <!--end::Tab pane-->
        </div>
        <!--end::Tab content-->
    </div>
    {{-- !------------------------------------------------------- --}}
@endsection

@section('modal-content')
    <div class="modal fade" id="modal_invoice_detail" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-750px">
            <div class="modal-content rounded">
                <div class="modal-header pb-0 border-0 justify-content-between">
                    <h4 class="modal-title">ใบชำระเงิน</h4>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <div class="modal-body scroll-y">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <span style="font-size: 14px;"><strong>วันที่บันทึก: </strong><span id="save_at"></span></span>
                        </div>
                        <div class="">
                            <span style="font-size: 14px;"><strong>วันที่ชำระ: </strong><span id="payment_at"></span></span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">ลำดับ</th>
                                        <th class="text-center">รายการชำระ</th>
                                        <th class="text-center">วันหมดอายุ</th>
                                        <th class="text-center">จำนวน/USER</th>
                                        <th class="text-center">ราคาต่อหน่วย</th>
                                        <th class="text-center">รวม</th>
                                    </tr>
                                </thead>
                                <tbody id="textData">
                                    {{-- <tr>
                                        <td class="text-center">1</td>
                                        <td>บุคคล.com</td>
                                        <td>05/06/2025</td>
                                        <td class="text-right">100</td>
                                        <td class="text-right">25</td>
                                        <td class="text-right">2,500.00</td>
                                    </tr> --}}
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td colspan="5"><strong>รวมยอดสุทธิ:</strong></td>
                                        <td class="text-right" id="sum_total">0.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <table class="">
                                <thead>
                                    <tr><th><strong>รายละเอียดเพิ่มเติม</strong></th></tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p id="detail"></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end"><div class=""><strong>ผู้ขาย:</strong> <span id="sales_name"></span></div></div>
                </div>
            </div>            
        </div>
    </div>
@endsection

@section('js-content')
    <script src="{{ asset('assets/js-external/invoices/invoices.js') }}"></script>
@endsection
