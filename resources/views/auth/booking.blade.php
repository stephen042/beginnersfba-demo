@extends('layouts.guest')


@section('content')
<main id="main" class="">

    <div id="content" class="blog-wrapper blog-single page-wrapper">


        <div class="row row-large row-divided ">

            <div class="large-9 col">



                <article id="post-946"
                    class="post-946 post type-post status-publish format-standard hentry category-amazon category-dropshipping category-etsy category-shopify">
                    <div class="article-inner ">
                        <header class="entry-header">
                            <div class="entry-header-text entry-header-text-top text-center">
                                <div style="text-align: center;padding: 20px;">
                                    <style>
                                        #google_translate_element {

                                            color: transparent;
                                        }

                                        #google_translate_element a {

                                            display: none;
                                        }

                                        select.google_translate_element {

                                            color: black;
                                        }

                                        div.goog-te-gadget {

                                            color: transparent;
                                        }

                                        div.goog-te-gadget {

                                            color: transparent !important;
                                        }

                                        .goog-te-gadget .goog-te-combo {

                                            margin: 0px 0 !important;
                                            padding: 0px 10px;
                                            font-size: 15px;
                                            font-weight: 500;
                                            background: rgba(0, 0, 0, 0.9);
                                            background-size: 300% 100%;
                                            border: 1px solid #fff;
                                            color: #52afee !important;
                                            border-radius: 5px;
                                            cursor: pointer;
                                            outline: none;
                                            font-family: 'Poppins', sans-serif;
                                            border-radius: 5px;
                                            box-shadow: 0px 3px 5px #fff;
                                            height: 30px;
                                            display: inline-block;
                                            position: relative;
                                            /* top: 6px; */
                                            width: 100px;
                                        }
                                    </style>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
													new google.translate.TranslateElement({ pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL }, 'google_translate_element');
												}
                                    </script>
                                    <script type="text/javascript"
                                        src="../translate_a/element.js?cb=googleTranslateElementInit"></script>
                                    <div id="google_translate_element"></div>
                                </div>

                                <h1 class="entry-title" id="headerForm">Provide information</h1>
                                <div class="entry-divider is-divider small"></div>


                            </div>
                        </header>
                        <div class="entry-content single-page">

                        </div>


                    </div>
                </article>

                <div id="comments" class="comments-area">
                    <div id="respond" class="comment-respond">

                        <form action="booking.php" method="post" id="commentform" class="comment-form" novalidate="">


                            <p class="comment-form-author">
                                <label for="author">Name <span class="required" aria-hidden="true">*</span></label>
                                <input id="author" name="customer_name" type="text" value="" size="30" maxlength="245"
                                    required="">
                            </p>
                            <p class="comment-form-email">
                                <label for="email">Email <span class="required" aria-hidden="true">*</span></label>
                                <input id="email" name="customer_email" type="email" value="" size="30" maxlength="100"
                                    aria-describedby="email-notes" required="">
                            </p>
                            <p class="comment-form-url"><label for="phone">Phone <span class="required"
                                        aria-hidden="true">*</span></label> <input id="phone"
                                    name="customer_mobile_phone" type="number" value="" size="30" maxlength="200"></p>

                            <p class="comment-form-comment">
                                <label for="comment">Did you watch the entire training before applying? <span
                                        class="required" aria-hidden="true">*</span></label>
                                <select name="select_train" required="">
                                    <option value="">Please Select One</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </p>

                            <p class="comment-form-comment">
                                <label for="comment">What is your budget to invest in your business? <span
                                        class="required" aria-hidden="true">*</span></label>
                                <select name="select_bus" required="">
                                    <option value="">Please Select One</option>
                                    <option value="$30k +">$30k +</option>
                                    <option value="$10,000 - $20,000">$10,000 - $20,000</option>
                                    <option value="$10,000 - $20,000">$5,000 - $10,000</option>
                                    <option value="$10,000 - $20,000">$2,500 - $5,000</option>
                                    <option value="$10,000 - $20,000">$1,000 - $2,500</option>
                                    <option value="$10,000 - $20,000">$250 - $1,000</option>


                                </select>
                            </p>

                            <p class="comment-form-comment">
                                <label for="comment">What is your biggest struggle in starting or growing an
                                    BeginnersFba business? <span class="required" aria-hidden="true">*</span></label>
                                <textarea id="comment" name="customer_str" cols="45" rows="8" maxlength="65525"
                                    required=""></textarea>
                            </p>

                            <p class="comment-form-comment">
                                <label for="comment">What is your experience selling products on Amazon? <span
                                        class="required" aria-hidden="true">*</span></label> <textarea id="comment"
                                    name="customer_exp" cols="45" rows="8" maxlength="65525" required=""></textarea>
                            </p>

                            <p class="comment-form-comment">
                                <label for="comment">If you're accepted, how soon can you get started? <span
                                        class="required" aria-hidden="true">*</span></label> <input id="phone"
                                    name="occupation" type="text" value="" size="30" maxlength="200">
                            </p>

                            <p class="comment-form-comment">
                                <label for="comment">Do you PROMISE that if you qualify you will show up to the
                                    call? <span class="required" aria-hidden="true">*</span></label>
                                <select name="select_fin" required="">
                                    <option value="">Please Select One</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </p>

                            <p class="form-submit">
                                <input name="submit" type="submit" class="submit formSubmitBtm" value="Done">
                                <input type="hidden" name="comment_post_ID" value="946" id="comment_post_ID">
                                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                            </p>
                        </form>
                    </div>
                    <!-- #respond -->
                </div>

            </div>
            <div class="post-sidebar large-3 col">
                <div id="secondary" class="widget-area " role="complementary">
                    <aside id="flatsome_recent_posts-17" class="widget flatsome_recent_posts"> <span
                            class="widget-title "><span>Latest Posts</span></span>
                        <div class="is-divider small"></div>
                    </aside>
                    <aside id="categories-14" class="widget widget_categories"><span
                            class="widget-title "><span>Categories</span></span>
                        <div class="is-divider small"></div>


                    </aside>
                    <aside id="archives-7" class="widget widget_archive"><span
                            class="widget-title "><span>Archives</span></span>
                        <div class="is-divider small"></div>


                    </aside>
                </div>
            </div>
        </div>

    </div>


</main>
@endsection