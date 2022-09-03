<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="https://nairaxi.ng/wp-content/uploads/2022/07/logo-quickvote-email.png" class="logo"
                    alt="QuickVote Logo">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
