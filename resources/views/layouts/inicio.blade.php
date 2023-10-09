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
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card border-success mb-3">
                    <div class="card-header bg-transparent border-success">Header</div>
                    <div class="card-body text-success">
                        <img src="{{ asset('linkcard_1.jpg') }}" alt="test"/>
                    </div>
                    <div class="card-footer bg-transparent border-success">Footer</div>
                </div>
            </div>
        </div>
    </div>
</body>
