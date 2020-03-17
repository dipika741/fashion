@extends('fashion.header')

@section('title')
    Contact
@stop

@section('banner')
	<!-- inner banner -->
	<div class="ibanner_w3 pt-sm-5 pt-3">
		<h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
			<span>f</span>ashion
			<span>h</span>ub</h4>
	</div>
	<!-- //inner banner -->
@stop
@section('breadcrumbs')
        <!-- breadcrumbs -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Girl's Clothing</li>
            </ol>
        </nav>
        <!-- //breadcrumbs -->
@stop
@section('content')
        <!-- Shop -->
        <div class="innerf-pages section">
            <div class="fh-container mx-auto">
                <div class="row my-lg-5 mb-5">
                    @include('fashion.sidebar')
                    <!-- grid right -->
                    <div class="col-lg-9 mt-lg-0 mt-5 right-product-grid">
                        <!-- card group  -->
                        <div class="card-group">
                            <!-- card -->
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="card product-men p-3">
                                    <div class="men-thumb-item">
                                        <img src="{{ asset('images/pg1.jpg') }}" alt="img" class="card-img-top">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="girl.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card body -->
                                    <div class="card-body  py-3 px-2">
                                        <h5 class="card-title text-capitalize">Midi/Knee Length Casual Dress</h5>
                                        <div class="card-text d-flex justify-content-between">
                                            <p class="text-dark font-weight-bold">$20.00</p>
                                            <p class="line-through">$39.99</p>
                                        </div>
                                    </div>
                                    <!-- card footer -->
                                    <div class="card-footer d-flex justify-content-end">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="hub_item" value="Midi/Knee Length Casual Dress">
                                            <input type="hidden" name="amount" value="20.00">
                                            <button type="submit" class="hub-cart phub-cart btn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- //card -->
                            <!-- card -->
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="card product-men p-3">
                                    <div class="men-thumb-item">
                                        <img src="{{ asset('images/pg2.jpg') }}" alt="img" class="card-img-top">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="girl.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card body -->
                                    <div class="card-body  py-3 px-2">
                                        <h5 class="card-title text-capitalize">Midi/Knee Length Casual Dress</h5>
                                        <div class="card-text d-flex justify-content-between">
                                            <p class="text-dark font-weight-bold">$24.99</p>
                                            <p class="line-through">$34.99</p>
                                        </div>
                                    </div>
                                    <!-- card footer -->
                                    <div class="card-footer d-flex justify-content-end">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="hub_item" value="Midi/Knee Length Casual Dress">
                                            <input type="hidden" name="amount" value="24.99">
                                            <button type="submit" class="hub-cart phub-cart btn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- //card -->
                            <!-- card -->
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="card product-men p-3">
                                    <div class="men-thumb-item">
                                        <img src="{{ asset('images/pg3.jpg') }}" alt="img" class="card-img-top">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="girl.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card body -->
                                    <div class="card-body  py-3 px-2">
                                        <h5 class="card-title text-capitalize">Midi/Knee Length Party Dress</h5>
                                        <div class="card-text d-flex justify-content-between">
                                            <p class="text-dark font-weight-bold">$14.99</p>
                                            <p class="line-through">$27.99</p>
                                        </div>
                                    </div>
                                    <!-- card footer -->
                                    <div class="card-footer d-flex justify-content-end">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="hub_item" value="Midi/Knee Length Party Dress">
                                            <input type="hidden" name="amount" value="14.99">
                                            <button type="submit" class="hub-cart phub-cart btn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- //card -->
                            <!-- card -->
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="card product-men p-3 out_w3">
                                    <div class="men-thumb-item position-relative">
                                        <img src="{{ asset('images/pg7.jpg') }}" alt="img" class="card-img-top">
                                        <span class="px-2 position-absolute">out of stock</span>
                                    </div>
                                    <!-- card body -->
                                    <div class="card-body  py-3 px-2">
                                        <h5 class="card-title text-capitalize">Girls Party Top and Skirt Set</h5>
                                        <div class="card-text d-flex justify-content-between">
                                            <p class="text-dark font-weight-bold">$19.00</p>
                                            <p class="line-through">$25.00</p>
                                        </div>
                                    </div>
                                    <!-- card footer -->
                                    <div class="card-footer d-flex justify-content-end">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- //card -->
                            <!-- //row  -->
                        </div>
                        <!-- //card group 1-->
                        <!-- card group 2 -->
                        <div class="card-group my-5">
                            <!-- row2 -->
                            <!-- card -->
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="card product-men p-3">
                                    <div class="men-thumb-item">
                                        <img src="{{ asset('images/pg4.jpg') }}" alt="img" class="card-img-top">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="girl.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card body -->
                                    <div class="card-body  py-3 px-2">
                                        <h5 class="card-title text-capitalize">Girl's Full Length Party Dress </h5>
                                        <div class="card-text d-flex justify-content-between">
                                            <p class="text-dark font-weight-bold">$20.00</p>
                                            <p class="line-through">$35.00</p>
                                        </div>
                                    </div>
                                    <!-- card footer -->
                                    <div class="card-footer d-flex justify-content-end">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="hub_item" value="Full Length Party Dress">
                                            <input type="hidden" name="amount" value="20.00">
                                            <button type="submit" class="hub-cart phub-cart btn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- //card -->
                            <!-- card -->
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="card product-men p-3">
                                    <div class="men-thumb-item">
                                        <img src="{{ asset('images/pg5.jpg') }}" alt="img" class="card-img-top">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="girl.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card body -->
                                    <div class="card-body  py-3 px-2">
                                        <h5 class="card-title text-capitalize">Midi/Knee Length Party Dress</h5>
                                        <div class="card-text d-flex justify-content-between">
                                            <p class="text-dark font-weight-bold">$18.00</p>
                                            <p class="line-through">$25.00</p>
                                        </div>
                                    </div>
                                    <!-- card footer -->
                                    <div class="card-footer d-flex justify-content-end">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="hub_item" value="Midi/Knee Length Party Dress">
                                            <input type="hidden" name="amount" value="18.00">
                                            <button type="submit" class="hub-cart phub-cart btn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- //card -->
                            <!-- card -->
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="card product-men p-3">
                                    <div class="men-thumb-item">
                                        <img src="{{ asset('images/pg6.jpg') }}" alt="img" class="card-img-top">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="girl.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card body -->
                                    <div class="card-body  py-3 px-2">
                                        <h5 class="card-title text-capitalize">Midi/Knee Length Party Dress</h5>
                                        <div class="card-text d-flex justify-content-between">
                                            <p class="text-dark font-weight-bold">$25.00</p>
                                            <p class="line-through">$49.99</p>
                                        </div>
                                    </div>
                                    <!-- card footer -->
                                    <div class="card-footer d-flex justify-content-end">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="hub_item" value="Midi/Knee Length Party Dress">
                                            <input type="hidden" name="amount" value="25.00">
                                            <button type="submit" class="hub-cart phub-cart btn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- //card -->
                            <!-- card -->
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="card product-men p-3">
                                    <div class="men-thumb-item">
                                        <img src="{{ asset('images/pg8.jpg') }}" alt="img" class="card-img-top">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="girl.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card body -->
                                    <div class="card-body  py-3 px-2">
                                        <h5 class="card-title text-capitalize">Midi/Knee Length Party Dress</h5>
                                        <div class="card-text d-flex justify-content-between">
                                            <p class="text-dark font-weight-bold">$14.99</p>
                                            <p class="line-through">$19.99</p>
                                        </div>
                                    </div>
                                    <!-- card footer -->
                                    <div class="card-footer d-flex justify-content-end">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="hub_item" value="Midi/Knee Length Party Dress">
                                            <input type="hidden" name="amount" value="19.99">
                                            <button type="submit" class="hub-cart phub-cart btn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- //card -->
                            <!-- //card 2 -->
                        </div>
                        <!-- //card group -->
                        <!-- card group  -->
                        <div class="card-group">
                            <!-- row1-->
                            <!-- card -->
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="card product-men p-3">
                                    <div class="men-thumb-item">
                                        <img src="{{ asset('images/pg9.jpg') }}" alt="img" class="card-img-top">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="girl.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card body -->
                                    <div class="card-body  py-3 px-2">
                                        <h5 class="card-title text-capitalize">Midi/Knee Length Party Dress</h5>
                                        <div class="card-text d-flex justify-content-between">
                                            <p class="text-dark font-weight-bold">$14.99</p>
                                            <p class="line-through">$25.99</p>
                                        </div>
                                    </div>
                                    <!-- card footer -->
                                    <div class="card-footer d-flex justify-content-end">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="hub_item" value="Midi/Knee Length Party Dress">
                                            <input type="hidden" name="amount" value="14.99">
                                            <button type="submit" class="hub-cart phub-cart btn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- //card -->
                            <!-- card -->
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="card product-men p-3">
                                    <div class="men-thumb-item">
                                        <img src="{{ asset('images/pg10.jpg') }}" alt="img" class="card-img-top">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="girl.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card body -->
                                    <div class="card-body  py-3 px-2">
                                        <h5 class="card-title text-capitalize">Midi/Knee Length Party Dress</h5>
                                        <div class="card-text d-flex justify-content-between">
                                            <p class="text-dark font-weight-bold">$29.99</p>
                                            <p class="line-through">$34.99</p>
                                        </div>
                                    </div>
                                    <!-- card footer -->
                                    <div class="card-footer d-flex justify-content-end">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="hub_item" value="Midi/Knee Length Party Dress">
                                            <input type="hidden" name="amount" value="29.99">
                                            <button type="submit" class="hub-cart phub-cart btn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- //card -->
                            <!-- card -->
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="card product-men p-3">
                                    <div class="men-thumb-item">
                                        <img src="{{ asset('images/pg11.jpg') }}" alt="img" class="card-img-top">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="girl.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card body -->
                                    <div class="card-body  py-3 px-2">
                                        <h5 class="card-title text-capitalize">Midi/Knee Length Party Dress</h5>
                                        <div class="card-text d-flex justify-content-between">
                                            <p class="text-dark font-weight-bold">$29.99</p>
                                            <p class="line-through">$36.99</p>
                                        </div>
                                    </div>
                                    <!-- card footer -->
                                    <div class="card-footer d-flex justify-content-end">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="hub_item" value="Midi/Knee Length Party Dress">
                                            <input type="hidden" name="amount" value="29.99">
                                            <button type="submit" class="hub-cart phub-cart btn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- //card -->
                            <!-- card -->
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="card product-men p-3">
                                    <div class="men-thumb-item">
                                        <img src="{{ asset('images/pg1.jpg') }}" alt="img" class="card-img-top">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="girl.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card body -->
                                    <div class="card-body  py-3 px-2">
                                        <h5 class="card-title text-capitalize">Midi/Knee Length Party Dress</h5>
                                        <div class="card-text d-flex justify-content-between">
                                            <p class="text-dark font-weight-bold">$25.99</p>
                                            <p class="line-through">$32.99</p>
                                        </div>
                                    </div>
                                    <!-- card footer -->
                                    <div class="card-footer d-flex justify-content-end">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="hub_item" value="Midi/Knee Length Party Dress">
                                            <input type="hidden" name="amount" value="25.99">
                                            <button type="submit" class="hub-cart phub-cart btn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- //card -->
                            <!-- //row  -->
                        </div>
                        <!-- //card group -->
                        <!-- card group  -->
                        <div class="card-group">
                            <!-- row1-->
                            <!-- card -->
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="card product-men p-3">
                                    <div class="men-thumb-item">
                                        <img src="{{ asset('images/pg5.jpg') }}" alt="img" class="card-img-top">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="girl.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card body -->
                                    <div class="card-body  py-3 px-2">
                                        <h5 class="card-title text-capitalize">Midi/Knee Length Party Dress</h5>
                                        <div class="card-text d-flex justify-content-between">
                                            <p class="text-dark font-weight-bold">$14.99</p>
                                            <p class="line-through">$17.99</p>
                                        </div>
                                    </div>
                                    <!-- card footer -->
                                    <div class="card-footer d-flex justify-content-end">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="hub_item" value="Midi/Knee Length Party Dress">
                                            <input type="hidden" name="amount" value="14.99">
                                            <button type="submit" class="hub-cart phub-cart btn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- //card -->
                            <!-- card -->
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="card product-men p-3">
                                    <div class="men-thumb-item">
                                        <img src="{{ asset('images/pg6.jpg') }}" alt="img" class="card-img-top">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="girl.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card body -->
                                    <div class="card-body  py-3 px-2">
                                        <h5 class="card-title text-capitalize">Midi/Knee Length Casual Dress</h5>
                                        <div class="card-text d-flex justify-content-between">
                                            <p class="text-dark font-weight-bold">$9.99</p>
                                            <p class="line-through">$15.99</p>
                                        </div>
                                    </div>
                                    <!-- card footer -->
                                    <div class="card-footer d-flex justify-content-end">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="hub_item" value="Midi/Knee Length Casual Dress">
                                            <input type="hidden" name="amount" value="19.99">
                                            <button type="submit" class="hub-cart phub-cart btn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- //card -->
                            <!-- card -->
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="card product-men p-3">
                                    <div class="men-thumb-item">
                                        <img src="{{ asset('images/pg1.jpg') }}" alt="img" class="card-img-top">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="girl.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card body -->
                                    <div class="card-body  py-3 px-2">
                                        <h5 class="card-title text-capitalize">Midi/Knee Length Casual Dress</h5>
                                        <div class="card-text d-flex justify-content-between">
                                            <p class="text-dark font-weight-bold">$14.99</p>
                                            <p class="line-through">$20.99</p>
                                        </div>
                                    </div>
                                    <!-- card footer -->
                                    <div class="card-footer d-flex justify-content-end">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="hub_item" value="Midi/Knee Length Casual Dress">
                                            <input type="hidden" name="amount" value="14.99">
                                            <button type="submit" class="hub-cart phub-cart btn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- //card -->
                            <!-- card -->
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="card product-men p-3">
                                    <div class="men-thumb-item">
                                        <img src="{{ asset('images/pg2.jpg') }}" alt="img" class="card-img-top">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="girl.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card body -->
                                    <div class="card-body  py-3 px-2">
                                        <h5 class="card-title text-capitalize">Midi/Knee Length Casual Dress</h5>
                                        <div class="card-text d-flex justify-content-between">
                                            <p class="text-dark font-weight-bold">$16.99</p>
                                            <p class="line-through">$24.99</p>
                                        </div>
                                    </div>
                                    <!-- card footer -->
                                    <div class="card-footer d-flex justify-content-end">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="hub_item" value="Midi/Knee Length Casual Dress">
                                            <input type="hidden" name="amount" value="16.99">
                                            <button type="submit" class="hub-cart phub-cart btn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- //card -->
                            <!-- //row  -->
                        </div>
                        <!-- //card group -->
                    </div>
                </div>
            </div>
        </div>
        <!--// Shop -->
@stop