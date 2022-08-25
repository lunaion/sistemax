<div class="form-group">
    <label for="provider_id">Proveedor</label>
    <select class="form-control" name="provider_id" id="provider_id">
      @foreach ($providers as $provider)
      <option value="{{ $provider->id }}">{{ $provider->name }}</option>
      @endforeach
    </select>
</div>

<div class="form-group">
    <label for="tax">Impuesto</label>
    <input type="number"
        class="form-control" name="tax" id="tax" aria-describedby="helpId" placeholder="19%">
</div>

<div class="form-group">
    <label for="product_id">Productos</label>
    <select class="form-control" name="product_id" id="product_id">
      @foreach ($products as $product)
      <option value="{{ $product->id }}">{{ $product->name }}</option>
      @endforeach
    </select>
</div>

<div class="form-group">
    <label for="quantity">Cantidad</label>
    <input type="number"
        class="form-control" name="quantity" id="quantity" aria-describedby="helpId" placeholder="Cantidad">
</div>

<div class="form-group">
    <label for="price">Precio de compra</label>
    <input type="number"
        class="form-control" name="price" id="price" aria-describedby="helpId" placeholder="$">
</div>

<div class="form-group">
    <button type="button" id="agregar" class="btn btn-primary float-right">Agregar producto</button>
</div>

<div class="form-group">
    <h4 class="card-title">Detalles de compra</h4>
    <div class="table-responsive col-md-12">
        <table id="detalles" class="table table-striped">
            <thead>
                <tr>
                    <th>Eliminar</th>
                    <th>Producto</th>
                    <th>Precio (COP)</th>
                    <th>Cantidad</th>
                    <th>Subtotal (COP)</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th colspan="4">
                        <p align="right">TOTAL:</p>
                    </th>
                    <th>
                        <p align="right"><span id="total">COP 0.00</span></p>
                    </th>
                </tr>
                <tr id="dvOcultar">
                    <th colspan="4">
                        <p align="right">TOTAL IMPUESTO (19%):</p>
                    </th>
                    <th>
                        <p align="right"><span id="total_impuesto">COP 0.00</span></p>
                    </th>
                </tr>
                <tr>
                    <th colspan="4">
                        <p align="right">TOTAL A PAGAR:</p>
                    </th>
                    <th>
                        <p align="right"><span align="right" id="total_pagar_html">COP 0.00</span>
                            <input type="hidden" name="total" id="total_pagar">
                        </p>
                    </th>
                </tr>
            </tfoot>
            <tbody>
            </tbody>
        </table>
    </div>
</div>