/**
 * Lazy Loading Implementation
 * Automatically lazy loads images with lazy-load class
 */

document.addEventListener('DOMContentLoaded', function() {
    // Lazy load images
    const lazyImages = document.querySelectorAll('img.lazy-load');
    let imageObserver;
    
    if ('IntersectionObserver' in window) {
        imageObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    
                    // Create a temporary image to preload
                    const tempImg = new Image();
                    tempImg.onload = function() {
                        img.src = img.dataset.src;
                        img.classList.remove('lazy-load');
                        img.classList.add('loaded');
                        observer.unobserve(img);
                    };
                    tempImg.src = img.dataset.src;
                }
            });
        }, {
            rootMargin: '50px 0px',
            threshold: 0.01
        });
        
        lazyImages.forEach(function(img) {
            imageObserver.observe(img);
        });
    } else {
        // Fallback for older browsers
        lazyImages.forEach(function(img) {
            img.src = img.dataset.src;
            img.classList.remove('lazy-load');
            img.classList.add('loaded');
        });
    }
    
    // Auto-add lazy loading to images without it
    const allImages = document.querySelectorAll('img:not(.lazy-load):not([loading])');
    allImages.forEach(function(img) {
        // Skip small images, icons, and already loaded images
        if (img.naturalWidth > 0 || img.complete) return;
        if (img.width < 100 || img.height < 100) return;
        if (img.src.includes('data:')) return;
        if (img.classList.contains('no-lazy')) return;
        
        // Store original src and add lazy loading
        img.dataset.src = img.src;
        img.src = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9IiNmMGYwZjAiLz48L3N2Zz4=';
        img.classList.add('lazy-load');
        
        // Observe the new lazy image
        if (typeof imageObserver !== 'undefined') {
            imageObserver.observe(img);
        } else {
            // Fallback if IntersectionObserver is not supported
            img.src = img.dataset.src;
            img.classList.remove('lazy-load');
            img.classList.add('loaded');
        }
    });
});

// Export for potential module use
if (typeof module !== 'undefined' && module.exports) {
    module.exports = { initLazyLoad: function() { /* Already initialized */ } };
}
