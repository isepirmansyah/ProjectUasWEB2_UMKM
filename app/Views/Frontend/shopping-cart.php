<?= $this->extend('layout/app2') ?>

<?= $this->section('content') ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Shopping Cart</h4>
                    <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <?php if ($pesananku == null) { ?>
                    <h4>Anda Belum Memiliki Pesanan</h4>
                    <?php } else { ?>
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                foreach ($pesananku as $row):
                            ?>
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="img/shopping-cart/cart-1.jpg" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h5><?= $row['nama']; ?></h5>
                                        <h6><?= "Rp" . number_format($row['harga_jual'],2,',','.'); ?></h6>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <h6><?= $row['jumlah']; ?></h6>
                                </td>
                                <td class="cart__price">
                                    <?= "Rp" . number_format($row['jumlah']*$row['harga_jual'],2,',','.'); ?></td>
                                <td class="cart__close"><a href="
                                        <?= base_url('/pesananku/'.$row['id'].'/delete') ?>"
                                        title="Batalkan Pesanan"><i class="fa fa-close"></i></a></td>
                            </tr>
                            <?php
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                    <?php
                    } ?>

                </div>
                <div class="row">

                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__discount">
                    <h6>Discount codes</h6>
                    <form action="#">
                        <input type="text" placeholder="Coupon code">
                        <button type="submit">Apply</button>
                    </form>
                </div>
                <div class="cart__total">
                    <h6>Cart total</h6>
                    <ul>
                        <li>Subtotal <span>$ 169.50</span></li>
                        <li>Total <span>$ 169.50</span></li>
                    </ul>
                    <a href="#" class="primary-btn">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->
<?= $this->endSection() ?>