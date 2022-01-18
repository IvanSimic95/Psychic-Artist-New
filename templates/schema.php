

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "<?php echo $p['title']; ?>",
  "image": "<?php echo $p['logo']; ?>",
  "sku": "0446310786",
  "description": "<?php echo $p['description']; ?>",
  "mpn": "925872",
  "brand": {
        "@type": "Brand",
        "name": "Psychic Artist"
      },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "<?php echo $p['avg-rating']; ?>",
    "reviewCount": "<?php echo $p['reviews']; ?>"
  },
  "offers": {
    "@type": "Offer",
    "url": "<?php echo $p['url']; ?>",
    "priceCurrency": "USD",
    "price": "<?php echo $p['price']; ?>",
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