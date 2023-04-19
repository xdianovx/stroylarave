<a class="inline-flex items-center gap-4 text-[28px] leading-[100%] font-light group {{ $class }}"
    href="{{ $link }}">
    <p
        class="relative before:w-0 before:absolute before:h-[1px] before:bg-black before:left-0 before:-bottom-1 group-hover:before:w-full">
        {{ $text }}
    </p>

    <div class="w-8 h-8 flex items-center justify-center">
        <div
            class="w-4 h-4 rounded-full ease-in-out duration-300 border border-black transition-all flex items-center justify-center group-hover:w-8 group-hover:h-8 group-hover:bg-black">
            <svg width="14" height="12" viewBox="0 0 14 12" class="stroke-white dark:stroke-black" fill="none">
                <path d="M0 6C1.01053 6 7.58772 6 12.5 6M12.5 6L7.44737 1M12.5 6L7.44737 11" stroke-width="2" />
            </svg>
        </div>
    </div>
</a>
