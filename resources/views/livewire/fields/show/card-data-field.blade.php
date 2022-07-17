<table style="width: 100%; border: 1px solid hsla(0,0%,82.4%,.5)">
    @foreach ($field->getValue() as $key => $value)
        <tr>
            <td style="padding: 1rem">{{ ucfirst($key) }}</td>
            <td style="padding: 1rem">{{ $value }}</td>
        </tr>
    @endforeach
</table>
