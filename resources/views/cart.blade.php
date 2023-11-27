@extends('layouts._layout')

@section('content')
    <main class="main">
        <div class="container-fluid">
            <div class="row mt-5 mb-5">
                <div class="col-12">
                    <h2 class="section-title text-center">
                        <span>Товары в корзине</span>
                    </h2>
                </div>
            </div>

            <div class="card">
                <div class="row">
                    <div class="col-md-8 cart">
                        <div class="row border-top border-bottom">
                            <div class="row main align-items-center">
                                <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/1GrakTl.jpg" alt=""></div>
                                <div class="col">
                                    <div class="row text-muted">Shirt</div>
                                    <div class="row">Cotton T-shirt</div>
                                </div>
                                <div class="col">
                                    <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                                </div>
                                <div class="col">&euro; 44.00 <span class="close">&#10005;</span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row main align-items-center">
                                <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/ba3tvGm.jpg" alt=""></div>
                                <div class="col">
                                    <div class="row text-muted">Shirt</div>
                                    <div class="row">Cotton T-shirt</div>
                                </div>
                                <div class="col">
                                    <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                                </div>
                                <div class="col">&euro; 44.00 <span class="close">&#10005;</span></div>
                            </div>
                        </div>
                        <div class="row border-top border-bottom">
                            <div class="row main align-items-center">
                                <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/pHQ3xT3.jpg" alt=""></div>
                                <div class="col">
                                    <div class="row text-muted">Shirt</div>
                                    <div class="row">Cotton T-shirt</div>
                                </div>
                                <div class="col">
                                    <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                                </div>
                                <div class="col">&euro; 44.00 <span class="close">&#10005;</span></div>
                            </div>
                        </div>
                        <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
                    </div>
                    <div class="col-md-4 summary">
                        <div><h5><b>Summary</b></h5></div>
                        <hr>
                        <div class="row">
                            <div class="col" style="padding-left:0;">ITEMS 3</div>
                            <div class="col text-right">&euro; 132.00</div>
                        </div>
                        <form>
                            <p>SHIPPING</p>
                            <label>
                                <select><option class="text-muted">Standard-Delivery- &euro;5.00</option></select>
                            </label>
                            <p>GIVE CODE</p>
                            <label for="code"><input id="code" placeholder="Enter your code"></label>
                        </form>
                        <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                            <div class="col">TOTAL PRICE</div>
                            <div class="col text-right">&euro; 137.00</div>
                        </div>
                        <button class="btn">CHECKOUT</button>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
