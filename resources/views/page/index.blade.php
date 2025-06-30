<table>
    @foreach ($pages as $page)
        <tr>
            <td>{{ $page->published == 1 ? 'Published: ' : 'Draft: ' }}</td>
            <td>{{ $page->title }}</td>
        </tr>
    @endforeach
</table>
