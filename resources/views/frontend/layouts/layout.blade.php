<!DOCTYPE html>
<html lang="en">
	@include('frontend.layouts.partials.head')
    <body data-spy="scroll" data-offset="80">
		@include('frontend.layouts.partials.preloader')
		@include('frontend.layouts.partials.header')

		@yield('frontend_content')

		@include('frontend.layouts.partials.footer')
		@include('frontend.layouts.partials.scripts')
    </body>
</html>