@extends('navstore')
@section('content')
@vite('resources/css/app.css')
<style>
    /* Product Page Container */
.product-page-container {
  display: flex;
  flex-wrap: wrap;
  margin: 2rem auto;
  max-width: 1100px;
}

/* Product Images */
.product-images {
  display: flex;
  flex-direction: column;
  margin-right: 2rem;
}

.featured-image {
  width: 100%;
  max-width: 500px;
  height: auto;
}

.thumbnail-gallery {
  display: flex;
  flex-wrap: wrap;
  margin-top: 1rem;
}

.thumbnail {
  width: 75px;
  height: 75px;
  object-fit: cover;
  margin-right: 0.5rem;
  cursor: pointer;
  border: 2px solid #cccccc;
}

.thumbnail:hover,
.thumbnail.active {
  border-color: #ff7f50;
}

/* Product Info */
.product-info {
  flex: 1;
  margin-top: 1rem;
}

.product-title {
  font-size: 2rem;
  margin-bottom: 1rem;
}

.product-price {
  font-size: 1.5rem;
  margin-bottom: 1rem;
}

.product-description {
  margin-bottom: 1rem;
}

.product-form {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
}

.product-form label {
  margin-right: 0.5rem;
}

.product-form input {
  width: 50px;
  margin-right: 0.5rem;
}

.add-to-cart-button {
  background-color: #ff7f50;
  color: white;
  border: none;
  border-radius: 5px;
  padding: 0.5rem 1rem;
  cursor: pointer;
  transition: all 0.3s ease;
}

.add-to {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 0;
  border-top: 1px solid #E5E7EB;
}

.add-to select {
  padding: 0.5rem;
  border: 1px solid #E5E7EB;
  border-radius: 0.25rem;
}

.add-to button {
  background-color: #000000;
  color: #FFFFFF;
  border: none;
  padding: 0.75rem 2rem;
  border-radius: 0.25rem;
  font-size: 1rem;
  font-weight: 600;
  text-transform: uppercase;
  transition: background-color 0.2s ease;
}

.add-to button:hover {
  background-color: #1F2937;
}
.featured-image{
  width: 75%;
}
.thumbnail{
    width: 17%;
}
  /* Product Image */
  .relative {
    position: relative;
  }

  .relative img {
    display: block;
    width: 100%;
    height: auto;
  }

  .relative .absolute {
    position: absolute;
    top: 0;
    left: 0;
  }

  .relative .bg-black {
    background-color: #000000;
  }

  .relative .opacity-50 {
    opacity: 0.5;
  }

  .relative .text-white {
    color: #ffffff;
  }

  .relative .top-0 {
    top: 0;
  }

  .relative .left-0 {
    left: 0;
  }

  .relative .w-full {
    width: 100%;
  }

  .relative .h-full {
    height: 100%;
  }

  .relative .top-1-2 {
    top: 50%;
  }

  .relative .left1-2 {
    left: 50%;
  }

  .relative .transform {
    transform: translate(-50%, -50%);
  }

  /* Thumbnail Gallery */
  .flex-wrap {
    display: flex;
    flex-wrap: wrap;
  }

  .mx-2 {
    margin-left: -0.5rem;
    margin-right: -0.5rem;
  }

  .w14 {
    width: 25%;
  }

  .px-2 {
    padding-left: 0.5rem;
    padding-right: 0.5rem;
  }

  .hover\:opacity-75:hover {
    opacity: 0.75;
  }

  .cursor-pointer {
    cursor: pointer;
  }

  /* Add to Cart Button */
  .add-to {
    display: inline-block;
    padding: 0.5rem 1.5rem;
    font-size: 1.25rem;
    font-weight: 600;
    text-transform: uppercase;
    background-color: #f9ac6e;
    color: #ffffff;
    border-radius: 0.25rem;
    box-shadow: 0 2px 0 rgba(0, 0, 0, 0.05);
    transition: all 0.2s ease-in-out;
  }

  .add-to:hover {
    background-color: #e0924b;
    box-shadow: 0 2px 0 rgba(0, 0, 0, 0.1);
  }

  /* Responsive Styling */
  @media screen and (max-width: 768px) {
    .w14 {
      width: 50%;
    }
  }
  

</style>
<body>
<div class="product-page-container">
  <div class="product-images">
    <img class="featured-image" src="https://i.pinimg.com/564x/64/3b/db/643bdb44aca575f1d4d2596594ac5f9f.jpg" width="600" height="500" alt="Product Image">
    <div class="thumbnail-gallery">
      <img class="thumbnail" src="https://i.pinimg.com/564x/64/3b/db/643bdb44aca575f1d4d2596594ac5f9f.jpg" width="200" height="200" alt="Thumbnail">
      <img class="thumbnail" src="https://i.pinimg.com/564x/84/fa/f1/84faf16dfac47efef0f053b5859db241.jpg" width="200" height="200" alt="Thumbnail">
      <img class="thumbnail" src="https://i.pinimg.com/564x/f7/16/19/f71619da91e7e551ec5b1030b2f2cbc6.jpg" width="200" height="200" alt="Thumbnail">
      <img class="thumbnail" src="https://i.pinimg.com/564x/7b/4c/f2/7b4cf2613d4497d334c3e7457ec8cc3d.jpg" width="200" height="200" alt="Thumbnail">
    </div>
  </div>
  <div class="product-info">
    <h1 class="product-title">Regenerating Face Serum</h1>
    <p class="product-price">$35.00</p>
    <p class="product-description">This powerful serum is formulated to restore skin's youthful glow by reducing the appearance of fine lines and wrinkles. With natural ingredients like rosehip seed oil, jojoba oil, and lavender essential oil, it nourishes and hydrates your skin while protecting it from environmental stressors.</p>
    <form class="product-form">
      <label for="quantity">Quantity:</label>
      <input type="number" name="quantity" id="quantity" min="1" value="1">
      <button type="submit" class="add-to-cart-button">Add to Cart</button>
    </form>
  </div>
</div>

<script>
    const thumbnails = document.querySelectorAll('.thumbnail');
const featuredImage = document.querySelector('.featured-image');

thumbnails.forEach((thumbnail) => {
  thumbnail.addEventListener('click', () => {
    const thumbnailSrc = thumbnail.getAttribute('src');
    featuredImage.setAttribute('src', thumbnailSrc);
  });
});

</script>
</body>
