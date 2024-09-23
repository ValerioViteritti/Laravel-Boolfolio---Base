<form action="{{ route('admin.posts.destroy', $post) }}" method="POST"
    onsubmit="return confirm('Sei sicuro di eliminare il fumetto: {{ $post->title }} ?')">
    @csrf
    @method('DELETE')

    <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>

</form>
