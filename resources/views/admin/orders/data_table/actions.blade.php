@if (auth()->user()->hasPermission('delete_genres'))
    <form action="{{ route('admin.orders.destroy', $id) }}" class="my-1 my-xl-0" method="post"
        style="display: inline-block;">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i>
            @lang('site.delete')</button>
    </form>

    <a class="btn-sm  btn btn-primary" href="{{ route('admin.orders.show', $id) }}"> @lang('site.show') </a>
    <a class="btn-sm  btn btn-primary" href="{{ route('admin.orders.edit', $id) }}"> @lang('site.edit') </a>
@endif
