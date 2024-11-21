<!-- Top Bar Start -->
<div class="top__bar">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-md-7">
                <div class="top__bar-left">
                    <a href="tel:{{ isset($options['phone']) ? $options['phone']->value : 'Set Phone' }}"><i
                            class="fas fa-phone-alt"></i>{{ isset($options['phone']) ? $options['phone']->value : 'Set Phone' }}</a>
                    <a href="mailto:{{ isset($options['email']) ? $options['email']->value : 'Set Email' }}"><i
                            class="fas fa-envelope"></i>{{ isset($options['email']) ? $options['email']->value : 'Set Email' }}</a>
                </div>
            </div>
            <div class="col-xl-5 col-md-5">
                <div class="top__bar-right">
                    <a href="{{ isset($options['gmap_link']) ? $options['gmap_link']->value : 'Set Google Map link' }}"><i
                            class="fas fa-map-marker-alt"></i>{{ isset($options['address']) ? $options['address']->value : 'Set Address' }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar End -->
