<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "<?php echo $title; ?>",
  "image": "<?php echo $logo; ?>",
  "sku": "0446310786",
  "description": "<?php echo $description; ?>",
  "mpn": "925872",
  "brand": {
        "@type": "Brand",
        "name": "Psychic Artist"
      },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "<?php echo $avgrating; ?>",
    "reviewCount": "<?php echo $reviews; ?>"
  },
  "offers": {
    "@type": "Offer",
    "url": "<?php echo $url; ?>",
    "priceCurrency": "USD",
    "price": "<?php echo $price; ?>",
    "priceValidUntil": "2022-01-25",
    "itemCondition": "http://schema.org/UsedCondition",
    "availability": "http://schema.org/InStock",
    "seller": {
      "@type": "Organization",
      "name": "Psychic Artist"
    }
  },

  "review": {
          "@type": "Review",
          "reviewRating": {
            "@type": "Rating",
            "ratingValue": "5",
            "bestRating": "5"
          },
          "author": {
          "@type": "Person",
          "name": "Fred Benson"
        }
    }
// Add more reviews from comments
}
</script>