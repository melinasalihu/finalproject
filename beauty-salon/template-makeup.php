<?php
/**
 * Template Name: Makeup
 * Custom makeup services page
 */
get_header(); ?>

<section class="category-hero" style="background: linear-gradient(135deg, #ffe0e6 0%, #ffb3c1 100%); padding: 80px 20px; text-align: center;">
    <div class="container">
        <h1 style="font-family: 'Playfair Display', serif; color: #d81b60; font-size: 3.5rem; margin: 0; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">💄 Shërbime Makiazhi</h1>
        <p style="font-size: 1.3rem; color: #666; margin-top: 15px; font-weight: 300;">Nxirrni bukurinë tuaj të brendshme me profesionalizëm</p>
        <p style="font-size: 1rem; color: #999; margin-top: 10px;">Teknika të fundit me produkte premium</p>
    </div>
</section>

<div class="container py-5">
    <div style="max-width: 800px; margin: 0 auto 40px; text-align: center;">
        <h2 class="section-title">Pse Të Zgjerdhni Shërbimin Tonë?</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 30px;">
            <div style="padding: 20px; background: #f9f9f9; border-radius: 10px;">
                <div style="font-size: 2rem; margin-bottom: 10px;">💄</div>
                <h4 style="color: var(--gold);">Artiste Profesionale</h4>
                <p style="color: #666; margin: 0;">Të specialized në të gjitha stilet e makiazhi</p>
            </div>
            <div style="padding: 20px; background: #f9f9f9; border-radius: 10px;">
                <div style="font-size: 2rem; margin-bottom: 10px;">✨</div>
                <h4 style="color: var(--gold);">Produkte Luksuse</h4>
                <p style="color: #666; margin: 0;">Markat më të njohura në botë</p>
            </div>
            <div style="padding: 20px; background: #f9f9f9; border-radius: 10px;">
                <div style="font-size: 2rem; margin-bottom: 10px;">🎨</div>
                <h4 style="color: var(--gold);">Dizajne Custom</h4>
                <p style="color: #666; margin: 0;">Sipas imagjinatës dhe dëshirave tuaja</p>
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
                        'terms' => array('makeup', 'makiazh'),
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
    <div style="background: linear-gradient(135deg, #ffe6ec 0%, #ffe0e6 100%); padding: 50px 20px; margin-top: 50px; border-radius: 12px;">
        <h2 class="section-title" style="text-align: center;">💰 Çmime të Shërbimeve</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; margin-top: 40px;">
            
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(216, 27, 96, 0.15); border-top: 4px solid #d81b60; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #d81b60; font-size: 1.5rem; margin: 0 0 20px 0;">Makiazh i Përditshëm</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">15€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Korigjim lëkure</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Sy dhe buzë</li>
                    <li style="padding: 8px 0;">✓ Finishing touch</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(216, 27, 96, 0.15); border-top: 4px solid #d81b60; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #d81b60; font-size: 1.5rem; margin: 0 0 20px 0;">Makiazh Dasme</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">30€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Makiazh komplete</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Qëndrueshmëri 8+ orë</li>
                    <li style="padding: 8px 0;">✓ Retouching</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(216, 27, 96, 0.15); border-top: 4px solid #d81b60; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #d81b60; font-size: 1.5rem; margin: 0 0 20px 0;">Makiazh Nate</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">20€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Drita dramtike</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Sy ekspresivë</li>
                    <li style="padding: 8px 0;">✓ Perfekt për dasmën</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(216, 27, 96, 0.15); border-top: 4px solid #d81b60; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #d81b60; font-size: 1.5rem; margin: 0 0 20px 0;">Makiazh Artiste</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">25€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Arta e pasionit</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Dizajne të ndryshueshme</li>
                    <li style="padding: 8px 0;">✓ Custom kreativ</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(216, 27, 96, 0.15); border-top: 4px solid #d81b60; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #d81b60; font-size: 1.5rem; margin: 0 0 20px 0;">Sy apo Buzë</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">+5€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Nëndim linier</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Linjë të përsosur</li>
                    <li style="padding: 8px 0;">✓ Qëndrueshmëri</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(216, 27, 96, 0.15); border-top: 4px solid #d81b60; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #d81b60; font-size: 1.5rem; margin: 0 0 20px 0;">Paket Proçesi</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">45€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Trajtim fytyre</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Makiazh komplet</li>
                    <li style="padding: 8px 0;">✓ Konsultim</li>
                </ul>
            </div>
        </div>
    </div>

    <div style="background: #f5f5f5; padding: 50px 20px; margin-top: 50px; border-radius: 12px; text-align: center;">
        <h2 class="section-title">Këshilla për Kujdesin e Lëkurës para Makiazhi</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 30px;">
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">💧</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Hidratim i Mirë</h4>
                <p style="color: #666; margin: 0;">Lëkura e hidratuar është më e mirë për makiazh</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">🧴</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Pastrimi i Mirë</h4>
                <p style="color: #666; margin: 0;">Pastroje fytyrën përpara se të aplikosh makiazh</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">☀️</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Sunscreen Çdo Ditë</h4>
                <p style="color: #666; margin: 0;">Mbroj lëkurën nga dëmtimi i diellit</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">💤</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Gjumi i Mirë</h4>
                <p style="color: #666; margin: 0;">Çuvalisa të mjaftueshëm për lëkurë të ndritshme</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">🍎</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Ushqim i Shëndetshëm</h4>
                <p style="color: #666; margin: 0;">Hani fruta dhe perime të pasura me antioksidante</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">💄</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Largimi i Makiazhi</h4>
                <p style="color: #666; margin: 0;">Largimi i mirë i makiazhi para se të flini</p>
            </div>
        </div>
    </div>

    <div style="background: linear-gradient(135deg, #d81b60 0%, #f06292 100%); padding: 50px 20px; margin-top: 50px; border-radius: 12px; color: white; text-align: center;">
        <h2 style="font-family: 'Playfair Display', serif; font-size: 2.5rem; margin: 0 0 40px 0;">Pse Të Zgjerdhni Nesh?</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 25px;">
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">💄</div>
                <h4 style="margin: 10px 0;">Artiste me Përvojë</h4>
                <p style="margin: 0; font-size: 0.95rem;">Specialistë në të gjitha stilet e makiazhi</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">✨</div>
                <h4 style="margin: 10px 0;">Produkte Luksuse</h4>
                <p style="margin: 0; font-size: 0.95rem;">Markat më të njohura në industri</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">🎨</div>
                <h4 style="margin: 10px 0;">Kreativitet Unlimited</h4>
                <p style="margin: 0; font-size: 0.95rem;">Dizajne sipas imagjinatës tuaj</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">⏰</div>
                <h4 style="margin: 10px 0;">Shërbim Shpejt</h4>
                <p style="margin: 0; font-size: 0.95rem;">Përfundim në kohë</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">🌟</div>
                <h4 style="margin: 10px 0;">Rezultat Perfekt</h4>
                <p style="margin: 0; font-size: 0.95rem;">Nxirrni bukurinë tuaj maksimale</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">💰</div>
                <h4 style="margin: 10px 0;">Çmime Konkuruese</h4>
                <p style="margin: 0; font-size: 0.95rem;">Oferta të nxehtë çdo javë</p>
            </div>
        </div>
    </div>

    <div style="background: #f9f9f9; padding: 50px 20px; border-radius: 12px; margin-top: 50px; text-align: center;">
        <h3 style="font-family: 'Playfair Display', serif; color: var(--gold); font-size: 2rem; margin-top: 0;">Nxirrni Bukurinë Tuaj Sot</h3>
        <p style="color: #666; margin-bottom: 20px; font-size: 1.1rem;">Lë mëndimet tuaja, nxirrni vetë-besimin tuaj!</p>
        <a href="<?php echo home_url('/contact'); ?>" class="btn-gold" style="padding: 15px 40px; font-size: 1.1rem; display: inline-block; text-decoration: none; border-radius: 5px;">📞 Kontakto Për Rezervim</a>
        <p style="color: #999; margin-top: 20px; font-size: 0.9rem;">Ose na telefononi: <strong style="color: #666;">+355 XX XXX XXXX</strong></p>
    </div>
</div>

<?php get_footer(); ?>
