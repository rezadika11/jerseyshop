<div class="container">
   <div class="banner">
       <img src="{{ url('assets/slider/slider1.png') }}" alt="">
   </div>


   <section class="pilih-liga mt-4">
        <h3><strong>Pilih Liga</strong></h3>
       <div class="row mt-4">
        @foreach ($ligas as $liga)
        <div class="col">
            <div class="card shadow">
                <div class="card-body text-center">
                    <img src="{{ url('assets/liga') }}/{{ $liga->gambar }}" class="img-fluid">
                </div>
            </div>
        </div>
        @endforeach
       </div>
   </section>


   <section class="best-products mt-5 mb-4">
    <h3><strong>Best Product</strong></h3>
   <div class="row mt-4">
    @foreach ($product as $product)
    <div class="col">
        <div class="card ">
            <div class="card-body text-center">
                <img src="{{ url('assets/jersey') }}/{{ $product->gambar }}" class="img-fluid">
                <div class="row mt-2">
                    <div class="col-md-12">
                        <h5><strong>{{ $product->nama }}</strong></h5>
                        <h5>Rp. {{ number_format($product->harga) }}</h5>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                       <a href="#" class="btn btn-success btn-block">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
   </div>
</section>
</div>
