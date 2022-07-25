<body class="page-template page-template-page-blank-template page-template-page-blank-template-php page page-id-1249 theme-eldon qode-framework-1.1.6 woocommerce-no-js qodef-qi--no-touch qi-addons-for-elementor-1.5.1 qodef-back-to-top--enabled  qodef-skin--black qodef--passepartout qodef-header--standard qodef-header-appearance--none qodef-header-borders--enabled qodef-mobile-header--standard qodef-drop-down-second--full-width qodef-drop-down-second--default eldon-core-1.0 eldon-1.0 qodef-content-grid-1300 qodef-header-standard--center qodef-search--covers-header elementor-default elementor-kit-11 elementor-page elementor-page-1249" itemscope itemtype="https://schema.org/WebPage">
    <!-- body -->
    <div id="qodef-page-wrapper" class="">
        <div id="qodef-page-outer">
            <div id="qodef-page-inner" class="qodef-content-full-width">
                <main id="qodef-page-content" class="qodef-grid qodef-layout--template " role="main">
                    <div class="qodef-grid-inner clear">
                        <div class="qodef-grid-item qodef-page-content-section qodef-col--12">
                            <div data-elementor-type="wp-page" data-elementor-id="1249" class="elementor elementor-1249" data-elementor-settings="[]">
                                <div class="elementor-section-wrap">
                                    <?php $this->load->view('template/topbar'); ?>
                                    <div id="qodef-page-outer" style="margin-top: 30px;">
                                        <div class="qodef-page-title qodef-m qodef-title--standard-with-breadcrumbs qodef-alignment--center qodef-vertical-alignment--header-bottom">
                                            <div class="qodef-m-inner">
                                                <h1>my ticket </h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="qodef-page-inner" class="qodef-content-grid">
                                        <?php if ($ticket == '') { ?>
                                            <main id="qodef-page-content" class="qodef-grid qodef-layout--template " role="main">
                                                <div class="qodef-grid-inner clear">
                                                    <div class="qodef-grid-item qodef-page-content-section qodef-col--12">
                                                        <div class="woocommerce">
                                                            <div class="woocommerce-notices-wrapper"></div>
                                                            <p class="cart-empty woocommerce-info">You Don't Have Any Ticket</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="text-align:center">
                                                    <button type="submit" class="button alt" onclick="window.history.back();" style="margin:50px auto;text-align:center">Back</button>
                                                </div>
                                            </main>
                                        <?php } else { ?>
                                            <main id="qodef-page-content" class="qodef-grid qodef-layout--template " role="main">
                                                <div class="qodef-grid-inner clear">
                                                    <div class="qodef-grid-item qodef-page-content-section qodef-col--12">
                                                        <div id="qodef-woo-page" class="qodef--cart">
                                                            <table class="table table-responsive shop_table shop_table_responsive" cellspacing="0" style="margin-bottom:100px;">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="product-remove">&nbsp;</th>
                                                                        <th class="product-thumbnail">&nbsp;</th>
                                                                        <th class="product-name">Ticket</th>
                                                                        <th class="product-price">Price</th>
                                                                        <th class="product-quantity">Quantity</th>
                                                                        <th class="product-subtotal">Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="cart_item">
                                                                        <td class="product-remove">
                                                                            <?php if ($ticket['is_valid'] == 0 && $ticket['id_status'] == 2) { ?>
                                                                            <?php } else { ?>
                                                                                <a href="javascript:void(0)" id="btnCancelTicket" style="font-size: 12px;">Cancel</a>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td class="product-thumbnail">
                                                                            <?php if ($ticket['id_kategori'] == 1) { ?>
                                                                                <a href="javascript:void(0)">
                                                                                    <img src="<?= base_url('assets/images/ticket/early.jpg') ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="t" />
                                                                                </a>
                                                                            <?php } else if ($ticket['id_kategori'] == 2) { ?>
                                                                                <a href="javascript:void(0)">
                                                                                    <img src="<?= base_url('assets/images/ticket/presale.jpg') ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="t" />
                                                                                </a>
                                                                            <?php } else if ($ticket['id_kategori'] == 3) { ?>
                                                                                <a href="javascript:void(0)">
                                                                                    <img src="<?= base_url('assets/images/ticket/presale.jpg') ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="t" />
                                                                                </a>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td class="product-name" data-title="Product">
                                                                            <a href="javascript:void(0)"><?= $ticket['kategori']; ?></a>
                                                                        </td>
                                                                        <td class="product-price" data-title="Price">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <bdi>
                                                                                    <?php if ($ticket['id_kategori'] == 1) { ?>
                                                                                        IDR 25.000
                                                                                    <?php } else if ($ticket['id_kategori'] == 2) { ?>
                                                                                        IDR 30.000
                                                                                    <?php } else if ($ticket['id_kategori'] == 3) { ?>
                                                                                        IDR 35.000
                                                                                    <?php } ?>
                                                                                </bdi>
                                                                            </span>
                                                                        </td>
                                                                        <td class="product-quantity" data-title="Quantity">
                                                                            <a href="javascript:void(0)">1</a>
                                                                        </td>
                                                                        <td class="product-subtotal" data-title="Subtotal">
                                                                            <?php if ($ticket['id_status'] == 1) { ?>
                                                                                <a href="javascript:void(0)" style="color: #ff4133;"><?= $ticket['status']; ?></a>
                                                                            <?php } else if ($ticket['id_status'] == 2) { ?>
                                                                                <a href="javascript:void(0)" style="color: #f7ee3b;"><?= $ticket['status']; ?></a>
                                                                            <?php } else { ?>
                                                                                <a href="javascript:void(0)" style="color: #5df73b;"><?= $ticket['status']; ?></a>
                                                                            <?php } ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="6" class="actions" style="border: none;">
                                                                            <p style="text-align:left">Info Pembayaran</p>
                                                                            <div style="text-align:left">
                                                                                <p>
                                                                                    <img src="<?= base_url('assets/images/payment/bca.png') ?>" alt="" style="width: 80px;height:auto">
                                                                                    &nbsp; <span id="bca">0292466909</span> <br>
                                                                                    &nbsp;(an Elsa Saphira)
                                                                                    &nbsp; <a onclick="copyToClipboard('#bca')"><i class="fas fa-clipboard-list"></i></a>
                                                                                </p>
                                                                                <p>
                                                                                    <img src="<?= base_url('assets/images/payment/dana.jpg') ?>" alt="" style="width: 80px;height:auto">
                                                                                    &nbsp; <span id="dana">089690534033</span> <br>
                                                                                    &nbsp;(an Elsa Saphira)
                                                                                    &nbsp; <a onclick="copyToClipboard('#dana')"><i class="fas fa-clipboard-list"></i></a>
                                                                                </p>
                                                                                <p>
                                                                                    <img src="<?= base_url('assets/images/payment/gopay.png') ?>" alt="" style="width: 80px;height:auto">
                                                                                    &nbsp; <span id="gopay">089690534033</span> <br>
                                                                                    &nbsp;(an Elsa Saphira)
                                                                                    &nbsp; <a onclick="copyToClipboard('#gopay')"><i class="fas fa-clipboard-list"></i></a>
                                                                                </p>
                                                                                <p>
                                                                                    <img src="<?= base_url('assets/images/payment/bni.png') ?>" alt="" style="width: 80px;height:auto">
                                                                                    &nbsp; <span id="bni">1170694926</span> <br>
                                                                                    &nbsp;(an Septyan Nugraha)
                                                                                    &nbsp; <a onclick="copyToClipboard('#bni')"><i class="fas fa-clipboard-list"></i></a>
                                                                                </p>
                                                                            </div>
                                                                            <div class="img-overlay-wrap">

                                                                                <img src="https://via.placeholder.com/400">
                                                                                <svg id="barcode"></svg>

                                                                            </div>
                                                                            <?php if ($ticket['is_valid'] == 0 && $ticket['id_status'] == 1) { ?>
                                                                                <p style="text-align:right">Kirim Bukti Transfer</p>
                                                                                <div style="text-align:right">
                                                                                    <form action="<?= base_url('ticket/send_bukti_tf') ?>" method="POST" enctype="multipart/form-data">
                                                                                        <input type="file" name="bukti_tf" accept="image/*">
                                                                                        <input type="hidden" name="id_ticket" value="<?= $ticket['id_ticket'] ?>">
                                                                                        <button type="submit">Send</button>
                                                                                    </form>
                                                                                </div>
                                                                            <?php } else if ($ticket['is_valid'] == 0 && $ticket['id_status'] == 2) { ?>
                                                                                <div style="text-align:right">
                                                                                    <button type="submit">Lihat Info Validasi</button>
                                                                                </div>
                                                                            <?php } ?>

                                                                        </td>
                                                                    </tr>
                                                                    <!-- <tr>
                                                                        <td colspan="6" class="actions" style="border: none;">

                                                                        </td>
                                                                    </tr> -->
                                                                </tbody>
                                                            </table>
                                                            <!-- <div class="cart-collaterals">
                                                                <div class="cart_totals ">
                                                                    <h2>Cart totals</h2>
                                                                    <table cellspacing="0" class="shop_table shop_table_responsive">
                                                                        <tr class="cart-subtotal">
                                                                            <th>Subtotal</th>
                                                                            <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>180</bdi></span></td>
                                                                        </tr>
                                                                        <tr class="woocommerce-shipping-totals shipping">
                                                                            <th>Shipping</th>
                                                                            <td data-title="Shipping">
                                                                                <ul id="shipping_method" class="woocommerce-shipping-methods">
                                                                                    <li>
                                                                                        <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate1" value="flat_rate:1" class="shipping_method" checked='checked' /><label for="shipping_method_0_flat_rate1">Flat rate</label>
                                                                                    </li>
                                                                                    <li>
                                                                                        <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_free_shipping2" value="free_shipping:2" class="shipping_method" /><label for="shipping_method_0_free_shipping2">Free shipping</label>
                                                                                    </li>
                                                                                    <li>
                                                                                        <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_local_pickup3" value="local_pickup:3" class="shipping_method" /><label for="shipping_method_0_local_pickup3">Local pickup</label>
                                                                                    </li>
                                                                                </ul>
                                                                                <p class="woocommerce-shipping-destination">
                                                                                    Shipping to <strong>CA</strong>. </p>
                                                                                <form class="woocommerce-shipping-calculator" action="https://eldon.qodeinteractive.com/cart/" method="post">
                                                                                    <a href="#" class="shipping-calculator-button">Change address</a>
                                                                                    <section class="shipping-calculator-form" style="display:none;">
                                                                                        <p class="form-row form-row-wide" id="calc_shipping_city_field">
                                                                                            <input type="text" class="input-text" value="" placeholder="City" name="calc_shipping_city" id="calc_shipping_city" />
                                                                                        </p>
                                                                                        <p class="form-row form-row-wide" id="calc_shipping_postcode_field">
                                                                                            <input type="text" class="input-text" value="" placeholder="Postcode / ZIP" name="calc_shipping_postcode" id="calc_shipping_postcode" />
                                                                                        </p>
                                                                                        <p><button type="submit" name="calc_shipping" value="1" class="button">Update</button></p>
                                                                                        <input type="hidden" id="woocommerce-shipping-calculator-nonce" name="woocommerce-shipping-calculator-nonce" value="05e96936e9" /><input type="hidden" name="_wp_http_referer" value="/cart/" />
                                                                                    </section>
                                                                                </form>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="order-total">
                                                                            <th>Total</th>
                                                                            <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>180</bdi></span></strong> </td>
                                                                        </tr>
                                                                    </table>
                                                                    <div class="wc-proceed-to-checkout">
                                                                        <a href="https://eldon.qodeinteractive.com/checkout/" class="checkout-button button alt wc-forward">
                                                                            Proceed to checkout</a>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </main>
                                        <?php  } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div id="cancelTicket" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close" id="closeCancel">&times;</span>
                <h4 style="text-align: center;">Cancel Ticket?</h4>
                <div style="margin:30px 0px 20px 0px;text-align:center">
                    <button type="submit" class="button alt" onclick="location.href='<?= base_url('ticket/cancel/' . $ticket['id_ticket'])  ?>'">Yes</button>
                    <button type="submit" class="button alt" id="closeCancel2" style="margin-left:20px">Cancel</button>
                </div>
            </div>
        </div>
        <script>
            var cancelTicket = document.getElementById("cancelTicket");
            var btnCancelTicket = document.getElementById("btnCancelTicket");
            var closeCancel = document.getElementById("closeCancel");
            var closeCancel2 = document.getElementById("closeCancel2");
            btnCancelTicket.onclick = function() {
                cancelTicket.style.display = "block";
            };
            closeCancel.onclick = function() {
                cancelTicket.style.display = "none";
            };
            closeCancel2.onclick = function() {
                cancelTicket.style.display = "none";
            };
            window.onclick = function(event) {
                if (event.target == cancelTicket) {
                    cancelTicket.style.display = "none";
                }
            }
        </script>