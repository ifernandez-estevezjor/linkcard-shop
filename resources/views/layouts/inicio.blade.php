<!--<body>
    <h2>Linkcard Template 1</h2>
    <h3>Precio: $2000 MXN</h3>
    <form action="{{ route('paypal') }}" method="post">
        @csrf
        <input type="hidden" name="price" value="2000">
        <button type="submit">Pagar</button>
    </form>
</body>-->

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card border-success mb-3">
                    <div class="card-header bg-transparent border-success">
                        <h2 class="fw-bold">Linkcard Plantilla 1</h2>
                    </div>
                    <div class="card-body text-success">
                        <img src="{{url('/images/linkcard_1.jpg')}}" style="width: 380px;" alt="test"/>
                    </div>
                    <div class="card-footer bg-transparent border-success">
                        <form action="{{route('paypal')}}" method="post">
                            @csrf
                            <input type="hidden" name="price" value="5">
                            <input type="hidden" name="id_template" value="1">
                            <center>
                                <button type="submit" class="btn btn-primary"><i class="bi bi-currency-dollar"></i> Pagar</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card border-success mb-3">
                    <div class="card-header bg-transparent border-success">
                        <h2 class="fw-bold">Linkcard Plantilla 2</h2>
                    </div>
                    <div class="card-body text-success">
                        <img src="{{url('/images/linkcard_2.jpg')}}" style="width: 380px;" alt="test"/>
                    </div>
                    <div class="card-footer bg-transparent border-success">
                        <form action="{{route('paypal')}}" method="post">
                            @csrf
                            <input type="hidden" name="price" value="10">
                            <input type="hidden" name="id_template" value="2">
                            <center>
                                <button type="submit" class="btn btn-primary"><i class="bi bi-currency-dollar"></i> Pagar</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card border-success mb-3">
                    <div class="card-header bg-transparent border-success">
                        <h2 class="fw-bold">Linkcard Plantilla 3</h2>
                    </div>
                    <div class="card-body text-success">
                        <img src="{{url('/images/linkcard_3.jpg')}}" style="width: 380px;" alt="test"/>
                    </div>
                    <div class="card-footer bg-transparent border-success">
                        <form action="{{route('paypal')}}" method="post">
                            @csrf
                            <input type="hidden" name="price" value="15">
                            <input type="hidden" name="id_template" value="3">
                            <center>
                                <button type="submit" class="btn btn-primary"><i class="bi bi-currency-dollar"></i> Pagar</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
