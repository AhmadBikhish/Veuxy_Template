<!-- Vendor JS-->
<script src="{{ asset('admin-assets/app-assets/vendors/js/vendors.min.js') }}"></script>
<script src="{{ asset('admin-assets/app-assets/js/core/custom.js') }}"></script>
@yield('vendor-js')

<!-- Theme JS-->
<script src="{{ asset('admin-assets/app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('admin-assets/app-assets/js/core/app.js') }}"></script>

<!-- Page JS-->
@yield('page-js')

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>