<div class="d-flex">
    <a href="{{ route('products.show', ['product' => $product->id])
    }}" class="btn btn-outline-primary btn-sm me-2"><i
    class="bi-person-lines-fill"></i></a>
    <a href="{{ route('products.edit', ['product' => $product->id])
    }}" class="btn btn-outline-success btn-sm me-2"><i
    class="bi-pencil-square"></i></a>
    <div>
    <form action="{{ route('products.destroy', ['product' =>
    $product->id]) }}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-outline-danger btn-sm
    me-2"><i class="bi-trash"></i></button>
    </form>
    </div>
</div>
