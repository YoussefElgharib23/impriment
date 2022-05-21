<div class="modal fade" id="detailsModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $product->name }} product details</h5>
            </div>
            <div class="modal-body">
                <img class="mw-100" src="/storage/{{ $product->image }}"
                    alt="Product {{ $product->image }} image">
                <div>
                    <h2 class="m-0">{{ $product->name }}</h2>
                    <span class="badge badge-primary">
                        Prix: {{ $product->price }} $
                    </span>
                </div>
                <p class="mt-2">
                    {{ $product->description }}
                </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
