<div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
    <button type="submit" command="close" commandfor="{{ $modalId }}" class="{{ isset($submitClass) ? $submitClass : '' }} cursor-pointer w-full justify-center rounded-md bg-green border-2 border-solid border-green-800 hover:border-yellow-400 focus:border-yellow-400 text-neutral-300 hover:text-yellow-400 focus:text-yellow-400 px-3 py-2 text-sm font-semibold hover:bg-red-400 sm:ml-3 sm:w-auto">{{ $submitText }}</button>
    <button type="button" command="close" commandfor="{{ $modalId }}" class="cursor-pointer mt-3 w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">{{ __('Close') }}</button>
</div>
