<?php
/**
 * Template Name: Nails
 * Custom nails services page
 */
get_header(); ?>

<section class="category-hero" style="background: linear-gradient(135deg, #ffe6f0 0%, #ffd4e5 100%); padding: 80px 20px; text-align: center;">
    <div class="container">
        <h1 style="font-family: 'Playfair Display', serif; color: #c94a8a; font-size: 3.5rem; margin: 0; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">💅 Shërbime Nails</h1>
        <p style="font-size: 1.3rem; color: #666; margin-top: 15px; font-weight: 300;">Kujdesi premium për thonjtë e shëndetshëm dhe bukur</p>
        <p style="font-size: 1rem; color: #999; margin-top: 10px;">Dizajne të personalizuara me produkte të cilësisë së lartë</p>
    </div>
</section>

<div class="container py-5">
    <div style="max-width: 800px; margin: 0 auto 40px; text-align: center;">
        <h2 class="section-title">Pse Të Zgjerdhni Shërbimin Tonë?</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 30px;">
            <div style="padding: 20px; background: #f9f9f9; border-radius: 10px;">
                <div style="font-size: 2rem; margin-bottom: 10px;">💅</div>
                <h4 style="color: var(--gold);">Dizajne Inovative</h4>
                <p style="color: #666; margin: 0;">Stile të fundit dhe ngjyra trendy</p>
            </div>
            <div style="padding: 20px; background: #f9f9f9; border-radius: 10px;">
                <div style="font-size: 2rem; margin-bottom: 10px;">✨</div>
                <h4 style="color: var(--gold);">Produkte Cilësore</h4>
                <p style="color: #666; margin: 0;">Përfundim të qëndrueshëm dhe profesional</p>
            </div>
            <div style="padding: 20px; background: #f9f9f9; border-radius: 10px;">
                <div style="font-size: 2rem; margin-bottom: 10px;">👨‍💼</div>
                <h4 style="color: var(--gold);">Meister Profesional</h4>
                <p style="color: #666; margin: 0;">Artizanë të përvojuar dhe të çertifikuar</p>
            </div>
        </div>
    </div>

    <div style="border-top: 2px solid #eee; padding-top: 40px;">
        <h2 class="section-title">Shërbime të Disponueshme</h2>
        <div class="services-grid">
            <?php
            $args = array(
                'post_type' => 'sherbimet',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'kategoria_sherbimit',
                        'field' => 'slug',
                        'terms' => array('nails', 'thonj'),
                    ),
                ),
            );
            $services = new WP_Query($args);
            
            if($services->have_posts()) {
                while($services->have_posts()) {
                    $services->the_post(); ?>
                    <div class="service-card">
                        <?php if(has_post_thumbnail()) the_post_thumbnail('salon-medium'); ?>
                        <div class="p-3">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="btn-gold">Shiko Detajet</a>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
            } else {
                echo '<p style="text-align: center; grid-column: 1 / -1;">Nuk ka shërbime të shtuara akoma në këtë kategori.</p>';
            }
            ?>
        </div>
    </div>

    <!-- Pricing Section -->
    <div style="background: linear-gradient(135deg, #fff5f9 0%, #ffe6f0 100%); padding: 50px 20px; margin-top: 50px; border-radius: 12px;">
        <h2 class="section-title" style="text-align: center;">💰 Çmime të Shërbimeve</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; margin-top: 40px;">
            
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(201, 74, 138, 0.15); border-top: 4px solid #c94a8a; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #c94a8a; font-size: 1.5rem; margin: 0 0 20px 0;">Manikyri Bazik</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">10€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Prelave e thonj</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Formim profesional</li>
                    <li style="padding: 8px 0;">✓ Varnish i zgjedhur</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(201, 74, 138, 0.15); border-top: 4px solid #c94a8a; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #c94a8a; font-size: 1.5rem; margin: 0 0 20px 0;">Gel Manikyri</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">15€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Prelave e thonj</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Gel premium</li>
                    <li style="padding: 8px 0;">✓ Zgjat 3 javë</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(201, 74, 138, 0.15); border-top: 4px solid #c94a8a; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #c94a8a; font-size: 1.5rem; margin: 0 0 20px 0;">Pedikiur Komplet</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">20€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Heqje e kutikule</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Masazhim të këmbëve</li>
                    <li style="padding: 8px 0;">✓ Varnish premium</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(201, 74, 138, 0.15); border-top: 4px solid #c94a8a; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #c94a8a; font-size: 1.5rem; margin: 0 0 20px 0;">French Design</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">12€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Dizajn klasik</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Shtresa të saktë</li>
                    <li style="padding: 8px 0;">✓ Përfundim profesional</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(201, 74, 138, 0.15); border-top: 4px solid #c94a8a; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #c94a8a; font-size: 1.5rem; margin: 0 0 20px 0;">Zdobrim Custom</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">+5€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Stikla kristal</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Art dizajn</li>
                    <li style="padding: 8px 0;">✓ Ngjyra të ndryshme</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(201, 74, 138, 0.15); border-top: 4px solid #c94a8a; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #c94a8a; font-size: 1.5rem; margin: 0 0 20px 0;">Paket VIP</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">35€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Manikyri + Pedikiur</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Zdobrim i përfshirë</li>
                    <li style="padding: 8px 0;">✓ Relaksacion plotë</li>
                </ul>
            </div>
        </div>
    </div>

    <div style="background: #f5f5f5; padding: 50px 20px; margin-top: 50px; border-radius: 12px; text-align: center;">
        <h2 class="section-title">Këshilla për Kujdesin e Thongjeve</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 30px;">
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">💧</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Hidroz Rregullishta</h4>
                <p style="color: #666; margin: 0;">Përdor hidrator premium për thonjtë dhe lëkurën pranë tyre çdo ditë</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">✂️</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Manicura e Rregullit</h4>
                <p style="color: #666; margin: 0;">Bisefi thonjtë çdo 3-4 javë për të ruajtur formën dhe shëndetin</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">🛡️</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Shtytja Katekulash</h4>
                <p style="color: #666; margin: 0;">Mos prel katekulat, vetëm shtytje për të shmangur lëndimin</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">🧤</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Mbrojtje në Shtëpi</h4>
                <p style="color: #666; margin: 0;">Përdor doreza kur fshesh, për të shmangur ekspozimin ndaj kimikave</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">💪</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Ushqim i Shëndetshëm</h4>
                <p style="color: #666; margin: 0;">Hani ushqime të pasura me biotin për thonj më të fortë</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">☀️</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Mbrojtje nga Dielli</h4>
                <p style="color: #666; margin: 0;">Aplikoj kremë me SPF edhe në thonj për të parandaluar zbatim</p>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div style="padding: 50px 20px; margin-top: 50px; text-align: center;">
        <h2 class="section-title">Përvojat e Klientëve Tanë ⭐</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; margin-top: 40px;">
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border-left: 4px solid var(--gold);">
                <div style="display: flex; margin-bottom: 15px;">
                    <span style="color: var(--gold); font-size: 1.2rem;">★★★★★</span>
                </div>
                <p style="color: #666; line-height: 1.6; margin: 15px 0; font-style: italic;">
                    "Profesionalizmi dhe kualiteti i shërbimit është jashtëzakonshëm. Thonjet e mij kanë zgjatur 4 javë pa problem!"
                </p>
                <p style="color: #999; margin: 0; font-weight: 600;">- Ariana K.</p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border-left: 4px solid var(--gold);">
                <div style="display: flex; margin-bottom: 15px;">
                    <span style="color: var(--gold); font-size: 1.2rem;">★★★★★</span>
                </div>
                <p style="color: #666; line-height: 1.6; margin: 15px 0; font-style: italic;">
                    "Dizajni custom i thonj ishte ekzakt si e vizatova. Stafi i këndshëm dhe ambient relaksues!"
                </p>
                <p style="color: #999; margin: 0; font-weight: 600;">- Denisa L.</p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border-left: 4px solid var(--gold);">
                <div style="display: flex; margin-bottom: 15px;">
                    <span style="color: var(--gold); font-size: 1.2rem;">★★★★★</span>
                </div>
                <p style="color: #666; line-height: 1.6; margin: 15px 0; font-style: italic;">
                    "Preço i arsyeshëm për cilësinë që marr. Do të kthehem sigurisht!"
                </p>
                <p style="color: #999; margin: 0; font-weight: 600;">- Ela M.</p>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div style="background: linear-gradient(135deg, #c94a8a 0%, #e075a6 100%); padding: 50px 20px; margin-top: 50px; border-radius: 12px; color: white; text-align: center;">
        <h2 style="font-family: 'Playfair Display', serif; font-size: 2.5rem; margin: 0 0 40px 0;">Pse Të Zgjerdhni Nesh?</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 25px;">
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">💅</div>
                <h4 style="margin: 10px 0;">Dizajne Inovative</h4>
                <p style="margin: 0; font-size: 0.95rem;">Stile të fundit dhe ngjyra trendy të përditësuara çdo javë</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">✨</div>
                <h4 style="margin: 10px 0;">Produkte Cilësore</h4>
                <p style="margin: 0; font-size: 0.95rem;">Përdorim vetëm produktet më të mira ndërkombëtare</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">👩‍💼</div>
                <h4 style="margin: 10px 0;">Ekspertë Profesional</h4>
                <p style="margin: 0; font-size: 0.95rem;">Artizanë të përvojuar dhe të çertifikuar ndërkombëtarisht</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">⏰</div>
                <h4 style="margin: 10px 0;">Orare Fleksibël</h4>
                <p style="margin: 0; font-size: 0.95rem;">I hapur 7 ditë në javë me orare të përshtatshme</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">🎯</div>
                <h4 style="margin: 10px 0;">Kujdesi Personal</h4>
                <p style="margin: 0; font-size: 0.95rem;">Konsultim i lirë dhe këshilla për kujdes të thonj</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">💰</div>
                <h4 style="margin: 10px 0;">Çmime Konkurruse</h4>
                <p style="margin: 0; font-size: 0.95rem;">Oferta të nxehtë dhe diskonte për klientë të rregullt</p>
            </div>
        </div>
    </div>

    <div style="background: #f9f9f9; padding: 50px 20px; border-radius: 12px; margin-top: 50px; text-align: center;">
        <h3 style="font-family: 'Playfair Display', serif; color: var(--gold); font-size: 2rem; margin-top: 0;">Rezervoni Shërbimin Tuaj Sot</h3>
        <p style="color: #666; margin-bottom: 20px; font-size: 1.1rem;">Merrni një përvojë të paharrueshme të bukurisë dhe relaksit</p>
        <a href="<?php echo home_url('/contact'); ?>" class="btn-gold" style="padding: 15px 40px; font-size: 1.1rem; display: inline-block; text-decoration: none; border-radius: 5px;">📞 Kontakto Për Rezervim</a>
        <p style="color: #999; margin-top: 20px; font-size: 0.9rem;">Ose na telefononi: <strong style="color: #666;">+355 XX XXX XXXX</strong></p>
    </div>
</div>

<?php get_footer(); ?>
