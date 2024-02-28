<div>
    {{-- Do your work, then step back. --}}

    @if ($post_type == 'announcement')
    Announcement
    @elseif($post_type == 'information')
    information
    @endif

</div>
