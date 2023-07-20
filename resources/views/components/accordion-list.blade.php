<li>
    <a data-bs-toggle="collapse" class="{{ $anchorClass }}"
        data-bs-target="#accordion-list-{{ $listNum }}"><span>{{ $spanTitle }}</span> {{ $anchorTitle }} <i
            class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
    <div id="accordion-list-{{ $listNum }}" class="collapse {{ $divClass }}" data-bs-parent=".accordion-list">
        <p>
            {{ $para }}
        </p>
    </div>
</li>
