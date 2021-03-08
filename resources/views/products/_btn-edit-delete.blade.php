<a href="{{ route('product.edit', $product->id)  }}" class="d-inline btn btn-warning">Editer</a>
<form action="{{ route('product.destroy', $product->id) }}" class="d-inline" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger">Supprimer</button>
</form>
