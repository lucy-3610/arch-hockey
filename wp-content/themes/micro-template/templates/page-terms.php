<?php /* Template Name: Terms and Conditions Page Template */

get_header();

$title_bg_color      = get_field('title_bg_color', 'option');
$domain_url          = get_field('domain_url', 'option');
$email_address       = get_field('email_address', 'option');
$entity_name         = get_field('entity_name', 'option');
$address_line_1      = get_field('address_line_1', 'option');
$address_line_2      = get_field('address_line_2', 'option');
$city_state_zip      = get_field('city_state_zip', 'option');
$entity_country      = get_field('entity_country', 'option');
$update_date         = get_field('update_date', 'option');
$ms_hosting          = get_field('ms_hosting', 'option');
$isp_name            = get_field('isp_name', 'option');
$isp_address_line_1  = get_field('isp_address_line_1', 'option');
$isp_address_line_2  = get_field('isp_address_line_2', 'option');
$isp_city_state_zip  = get_field('isp_city_state_zip', 'option');
$isp_country         = get_field('isp_country', 'option');
$isp_email_address   = get_field('isp_email_address', 'option');
$isp_phone_number    = get_field('isp_phone_number', 'option');
?>

<section class="bg-theme-<?php echo $title_bg_color; ?>">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="h2 white my-3">Terms & Conditions</h1>
            </div>
        </div>
    </div>
</section>

<section class="body">
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <p>Thank you for visiting our website (<a class="color-primary color-secondary-hover" rel="noopener noreferrer" href="https://<?php echo $domain_url; ?>"><?php echo $domain_url; ?></a>) hereinafter referred to as “Website,” “website,” or “Site.”</p>

                <p>If you are visually-impaired, we recommend using text-to-speech software, to enjoy our website. If you need help using our site, please email us at <a class="color-primary color-secondary-hover" target="_blank" rel="noopener noreferrer" href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a>.</p>

                <p>This page contains the following legal documents and policies for our website:</p>

                <ul>
                    <li>Terms and Conditions of Use (including Video and Audio content)</li>
                    <li>Anti-Spam Policy</li>
                    <li>Material Connections and Compensation Disclosure</li>
                    <li>External Links Policy</li>
                    <li>Miscellaneous Provisions</li>
                    <li>This page also includes our website’s Digital Millennium Copyright Act (“DMCA”) Notice describing how copyright infringement issues are handled.</li>
                </ul>

                <p>You may view our website’s Privacy Policy and other policies on other web pages on this site.</p>

                <h3 class="text-uppercase">Terms and Conditions of Use</h3>

                <p>If you want to view or use the website(s), you must agree to conform to and be legally bound by the terms and conditions described below. If you disagree with any of these terms or conditions, do not use our website.</p>

                <h3 class="text-uppercase">Our Website’s Privacy Policy is Part of These Terms and Conditions</h3>

                <p>Our website’s Privacy Policy is part of, and subject to, these terms and conditions of use. You may view our Privacy Policy elsewhere on our website. To the extent there is a conflict, the terms of the Privacy Policy shall govern.</p>

                <h3 class="text-uppercase">Video and Audio Content</h3>

                <p>The website (<a class="color-primary color-secondary-hover" rel="noopener noreferrer" href="https://<?php echo $domain_url; ?>"><?php echo $domain_url; ?></a>) may contain one or more videos and/or audio recordings (individually and collective hereinafter referred to as the “Recordings”). This section describes our respective rights and responsibilities with regard to the Recordings.</p>

                <h3 class="text-uppercase">Recordings Are for Entertainment and Informational Purposes Only</h3>

                <p>Recordings are not intended to provide specific legal, financial, tax, physical or mental health advice, or any other advice whatsoever to you, any other individual or company, and should not be relied upon in that regard. Any products or services described in the Recordings are only offered in jurisdictions where they may be legally offered. Information provided in Recordings is not all-inclusive, is limited to information that is made available, and such information should not be relied upon as all-inclusive or accurate.</p>

                <h3 class="text-uppercase">Embedded Recordings from External Social Media Sites Not Owned by Us</h3>

                <p>Some of the Recordings embedded for your viewing and listening pleasure are hosted on social media websites not owned by us. This may include, but is not limited to, sites such as YouTube.com (individually and collectively, the “Third Party Social Media Sites”).</p>

                <p>We make no claim to the intellectual property rights of the owners of Third Party Social Media Sites. We also make no claim to the intellectual property rights of third party creators of Recordings hosted on Third Party Social Media Sites. Our embedding of such Recordings on this website is done pursuant to applicable licenses to do so granted by the Third Party Social Media Sites.</p>

                <p>Embedding Recordings on this website does not create an association, agency, joint venture, or partnership between us and the owners of the Third Party Social Media Sites or impose any liability attributable to such a relationship upon either party.</p>

                <p>Recordings are only provided for your convenience. We do not control or guarantee the accuracy, completeness, relevance, or timeliness of any information contained in the Recordings. You should know that Third Party Social Media Sites may track your viewing and listening habits.</p>

                <p>If Recordings embedded on this website were created by us but are hosted on Third Party Social Media Sites, we retain all intellectual property rights for such Recordings except to the extent we granted a license to Third Party Social Media Sites to the Recordings. The hosting of these Recordings by Third Party Social Media Sites does not grant you any rights to such Recordings except to the extent provided under the applicable licenses those sites grant to viewers and listeners of Recordings they host on their websites.</p>

                <h3 class="text-uppercase">Embedded Recordings Owned by Us and Hosted on Our Servers or Third Party Servers Excluding Third Party Social Media Sites</h3>

                <p>Some of the Recordings embedded for your viewing and listening pleasure may be created by us and hosted on our servers or third party servers. This may include, but is not limited to cloud hosting services from Amazon.com or others but excludes the Third Party Social Media Sites described above.</p>

                <p>We own the copyrights and all other intellectual property rights for these Recordings unless otherwise expressly noted. We make no claim to the intellectual property rights of the owners of third party servers who by contractual agreement are hosting our Recordings for us.</p>

                <p>Hosting our Recordings on third party servers does not create an association, agency, joint venture, or partnership between us and the owners of those servers, or impose any liability attributable to such a relationship upon either party.</p>

                <p>Recordings are only provided for your convenience. We do not guarantee the accuracy, completeness, relevance, or timeliness of any information contained in the Recordings. You should know that we and/or the owners of third party servers hosting the Recordings may track your viewing and/or listening habits.</p>

                <h3 class="text-uppercase">Personal Non-Exclusive Revocable Non-Transferrable License</h3>

                <p>When you watch or listen to the Recordings on this website, you understand and agree that you are doing so pursuant to a personal non-exclusive revocable nontransferable license from us to do so.</p>

                <p>The Recordings remain the sole and exclusive property of their respective owners, which retain all rights thereto. You understand and agree that the Recordings may not be resold by you or otherwise distributed with or without consideration. You will not make the Recordings available to any third party. You may not reproduce or summarize any of the Recordings in any manner.</p>

                <p>You agree to destroy any of the Recordings cached on your computer or otherwise in your possession within 24 hours of watching or listening to said Recordings. Notwithstanding this provision, you agree to immediately destroy any Recordings in your possession upon material violation of the terms and conditions contained in this document, or upon request by us that you do so.</p>

                <h3 class="text-uppercase">Broken or Obsolete Recordings</h3>

                <p>We review our website periodically for broken or out-of-date Recordings. Any and all Recordings may be posted, altered, or removed at any time. To report problems with Recordings on our website, or for more information, please send an email to <a class="color-primary color-secondary-hover" target="_blank" rel="noopener noreferrer" href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a>.</p>

                <h3 class="text-uppercase">Licensee Status</h3>

                <p>You understand and agree that your use of our website is limited and non-exclusive as an individual nontransferable revocable licensee. We may, within our sole discretion, terminate your license to use our website, and access to our website, for any reason or no reason whatsoever, and without giving you notice.</p>

                <h3 class="text-uppercase">Content Ownership</h3>

                <p>All content on our website is owned by us or our content suppliers. On behalf of ourselves and our content suppliers, we claim all property rights, including intellectual property rights, for this content and you are not allowed to infringe upon those rights. We will prosecute to the fullest extent of the law anyone who attempts to steal our property.</p>

                <p>You agree not to copy content from our website without our permission. Any requests to use our content should be submitted to us by email to <a class="color-primary color-secondary-hover" target="_blank" rel="noopener noreferrer" href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a>.</p>

                <p>If you believe that your intellectual property rights have been infringed upon by our website content, please notify us by sending an email to <a class="color-primary color-secondary-hover" target="_blank" rel="noopener noreferrer" href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a>, or by sending postal mail to us at the address listed below. Please describe in detail the alleged infringement, including the factual and legal basis for your claim of ownership.</p>

                <p>For copyright infringement issues, please follow the instructions in the DMCA Notice found below on this web page</p>

                <h3 class="text-uppercase">Mobile Apps</h3>

                <p>We may provide you with services via a computer program designed to run on smartphones, tablet computers, or other mobile electronic devices (a “Mobile App”). If we provide you with a Mobile App either directly (e.g. download from our website) or indirectly (e.g. via a third party Mobile App store), you are solely responsible for using the Mobile App in a safe manner, including but not limited to obeying applicable pedestrian and motor vehicle traffic laws.</p>

                <p>If a Mobile App developed by or for a third party contains a link (affiliate or otherwise) to our products or services, we are not responsible for the content of or your use of the third party Mobile App.</p>

                <h3 class="text-uppercase">Disclaimers And Limitations of Liability</h3>
                <div class="text-uppercase">
                    <p>The information on our website is provided on an “as is,” “as available” basis. You agree that your use of our website is at your sole risk. We disclaim all warranties of any kind, including but not limited to, any express warranties, statutory warranties, and any implied warranties of merchantability, fitness for a particular purpose, and non-infringement. We do not warrant that our website will always be available, access will be uninterrupted, be error-free, meet your requirements, or that any defects in our website will be corrected.</p>

                    <p>Information on our website should not necessarily be relied upon and should never be construed to be professional advice from us. We do not guarantee the accuracy or completeness of any of the information provided, and are not responsible for any loss resulting from your reliance on such information.</p>

                    <p>If your jurisdiction does not allow limitations on warranties, this limitation may not apply to you. Your sole and exclusive remedy relating to your use of the site shall be to discontinue using the site.</p>

                    <p>Under no circumstances will we be liable or responsible for any direct, indirect, incidental, consequential (including damages from loss of business, lost profits, litigation, or the like), special, exemplary, punitive, or other damages, under any legal theory, arising out of or in any way relating to our website, your website use, or the content, even if advised of the possibility of such damages.</p>

                    <p>Our total liability for any claim arising out of or relating to our website shall not exceed one hundred ($100) dollars and that amount shall be in lieu of all other remedies which you may have against us or our affiliates (if any). Any such claim shall be subject to confidential binding arbitration as described later in this document.</p>
                </div>

                <h3 class="text-uppercase">Cyber-Bullying and Internet Harassment</h3>

                <p>Cyber-bullying and Internet harassment are prohibited. Although we support First Amendment free speech rights, such rights are limited where the purpose or effect of the expression is to bully, harass, threaten, ridicule, embarrass, and/or intimidate others. This is particularly true in matters involving race, ethnicity, national origin, religion, gender, sex, sexual orientation, physical disability, and/or mental condition.</p>

                <p>If we decide, in our sole discretion, that you have committed cyber-bullying acts or Internet harassment, we reserve the right to unilaterally suspend or ban your use of our Website immediately with or without notice to you. Although we are not obligated to do so, we reserve the right to monitor, investigate, and remove material posted to our Website that we determine constitutes cyber-bullying or Internet harassment.</p>

                <p>If we suspect that the cyber-bullying acts or Internet harassment constitutes illegal activity, we may, in our sole discretion, provide information to law enforcement or other government officials for purposes of investigating the misconduct. Examples of illegal conduct include, but are not limited to, threats of violence, sending sexually explicit images, and stalking others. This sharing of information is consistent with our Website’s Privacy Policy terms governing suspected illegal activity.</p>

                <h3 class="text-uppercase">External Links Policy</h3>

                <p>Our website, <a class="color-primary color-secondary-hover" rel="noopener noreferrer" href="https://<?php echo $domain_url; ?>"><?php echo $domain_url; ?></a>, contains hypertext links to websites and other information created and maintained by other individuals and organizations. These links are only provided for your convenience. We do not control or guarantee the accuracy, completeness, relevance, or timeliness of any information or privacy policies posted on these linked websites. You should know that these websites may track visitor viewing habits.</p>

                <p>Unless otherwise expressly stated by us, hyperlinks to particular items do not reflect their importance, and are not an endorsement of the individuals or organizations sponsoring the websites, the views expressed on the websites, or the products or services offered on the websites.</p>

                <p>We permit links to our website if they do not imply an endorsement by, or affiliation with, our website absent written consent. If we operate an affiliate program, our affiliates may link to our website pursuant to the terms and conditions of our affiliate program agreement with them.</p>

                <p>We review our website periodically for broken or out-of-date links. Any and all links may be posted, altered, or removed at any time. Please note that links to external websites may expire over time. Such expiration is beyond our control. To report problems with links on our website, or for more information about this policy, please send an e-mail to <a class="color-primary color-secondary-hover" target="_blank" rel="noopener noreferrer" href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a>.</p>

                <h3 class="text-uppercase mt-5">Miscellaneous Provisions</h3>

                <h3 class="text-uppercase">Protecting Your Account</h3>

                <p>If you have an account with us, you are responsible for protecting your account’s username and password to prevent misuse of your account by others that is unlawful or violates these terms and conditions of use. We reserve the right to suspend or terminate your account for misuse.</p>

                <h3 class="text-uppercase">Posted and Submitted Content</h3>

                <p>If you post content on or submit content to our website (e.g. photos, reviews, comments, etc.), you represent that you have the legal right to share such content on our website, the content is accurate, and it does not violate the law or these terms and conditions of use.</p>

                <p>We reserve the right to edit or delete content that you post or submit. However, we are not liable or responsible for content that you and others submit or post on our website.</p>

                <p>By posting or submitting content to us, you grant us an irrevocable, non-exclusive, royalty-free, perpetual, transferable, and sublicensable right to use the content. This includes a global right for us to adapt, alter, display, distribute, publish, reproduce, and translate the content. We can also create derivative works from the content in all media types (e.g. print, audio, video, etc). You also grant us the right to use your name and username in connection with such content.</p>

                <p>If claims are made against us because of the content you post or submit, you agree to indemnify and defend us against those claims at your sole expense.</p>

                <h3 class="text-uppercase">Agreement Between Us</h3>

                <p>These terms, conditions, and policies are an agreement between us that does not expressly or implicitly create any third party beneficiary rights.</p>

                <h3 class="text-uppercase">Severability Of These Terms, Conditions, And Policies</h3>

                <p>If any part of these terms, conditions, and policies are determined by a court of competent jurisdiction to be invalid or unenforceable, that part shall be limited or eliminated to the minimum extent necessary so that the remainder of these terms and conditions are fully enforceable and legally binding.</p>

                <h3 class="text-uppercase">How To Contact Us</h3>

                <p>Any questions or concerns about these terms, conditions, and policies should be brought to our attention by email to <a class="color-primary color-secondary-hover" target="_blank" rel="noopener noreferrer" href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a>, and providing us with information relating to your concern.</p>

                <p>You may also mail your concerns to us at the following address:</p>

                <p>
                    <?php if (!empty($entity_name)) { ?>
                        <?php echo $entity_name; ?><br>
                    <?php } ?>
                    <?php if (!empty($address_line_1)) { ?>
                        <?php echo $address_line_1; ?><br>
                    <?php } ?>
                    <?php if (!empty($address_line_2)) { ?>
                        <?php echo $address_line_2; ?><br>
                    <?php } ?>
                    <?php if (!empty($city_state_zip)) { ?>
                        <?php echo $city_state_zip; ?>
                    <?php } ?>
                    <?php if (!empty($city_state_zip) && !empty($entity_country)) { ?>
                        <br>
                    <?php } ?>
                    <?php if (!empty($entity_country)) { ?>
                        <?php echo $entity_country; ?>
                    <?php } ?>
                </p>

                <h3 class="text-uppercase">Entire Agreement</h3>

                <p>These terms and conditions, including the policies incorporated herein by express reference, constitute your entire agreement with us with respect to your use of our website.</p>

                <h3 class="text-uppercase">Modifications and Termination</h3>

                <p>The above terms, conditions and policies may change from time to time. If such changes are made, they will be effective immediately, and we will notify you by a notice posted on our website’s home page that changes have been made. If you disagree with the changes that have been made, you should not use our website.</p>

                <p>We may terminate these terms, conditions, and policies for any reason and at any time without notice to you.</p>

                <p>If you are concerned about these terms, conditions, and policies, you should read them each time before you use our website. Any questions or concerns should be brought to our attention by sending an email to <a class="color-primary color-secondary-hover" target="_blank" rel="noopener noreferrer" href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a> and providing us with information relating to your concern.</p>

                <p>These terms, conditions, and policies were last updated on <?php echo $update_date; ?>.</p>

                <h3 class="text-uppercase">Digital Millennium Copyright Act (“DCMA”) Notice</h3>

                <p>This notice is for informational purposes only. It is not intended as, nor should it be construed as, legal advice. If you believe that your intellectual property rights have been infringed upon, or if a notice of infringement has been filed against you, you should immediately seek legal counsel.</p>

                <p>This website, including all text, HTML, scripts, and images are copyrighted, owned, and/or licensed by <a class="color-primary color-secondary-hover" rel="noopener noreferrer" href="https://<?php echo $domain_url; ?>"><?php echo $domain_url; ?></a>. All rights reserved.</p>

                <p class="text-uppercase">No part of this website may be reproduced or transmitted in any form or by any means, mechanical, electronic, or otherwise, including photocopying and recording, or by any information storage and retrieval system, or transmitted by e-mail, or used in any other fashion without the express prior written permission of the website owner.</p>

                <p>This, of course, excludes the downloading and temporary caching of this website on a personal computer for the explicit purpose of viewing this website, as well as any information clearly marked as reproducible. This copyright notice applies to everyone, including all visitors to this website.</p>

                <h3 class="text-uppercase">DMCA Provisions</h3>

                <p>The Digital Millennium Copyright Act of 1998, found at 17 U.S.C. § 512 (“DMCA”), provides recourse for owners of copyrighted materials who believe that their rights under United States copyright law have been infringed upon on the Internet.</p>

                <p>Under the DMCA, the bona fide owner of copyrighted materials who has a good faith belief that their copyright has been infringed may contact not only the person or entity infringing on their copyright, but may also contact the designated agent of an Internet service provider to report alleged infringements of their protected works, when such alleged infringements appear on pages contained within the system of the Internet service provider (“ISP”).</p>

                <p>The owner of this website and the ISP are committed to complying with international trade law, international trade practices, all United States laws, including United States copyright law. Upon receipt of a properly filed complaint under the DMCA, the owner and/or the ISP of this website will block access to the allegedly infringing material. The website owner and/or the ISP will forward a copy of the notification of claimed copyright infringement to the alleged infringer. Anyone who believes in good faith that a notice of copyright infringement has wrongfully been filed against them, may submit a Counternotice to the website owner and/or the ISP.</p>

                <h3 class="text-uppercase mt-5">Notification of Claimed Copyright Infringement</h3>

                <h3 class="text-uppercase mt-3">
                    The Website Owner<br>
                    Copyright Agent
                </h3>

                <p>
                    <?php if (!empty($entity_name)) { ?>
                        <?php echo $entity_name; ?><br>
                    <?php } ?>
                    <?php if (!empty($address_line_1)) { ?>
                        <?php echo $address_line_1; ?><br>
                    <?php } ?>
                    <?php if (!empty($address_line_2)) { ?>
                        <?php echo $address_line_2; ?><br>
                    <?php } ?>
                    <?php if (!empty($city_state_zip)) { ?>
                        <?php echo $city_state_zip; ?>
                    <?php } ?>
                    <?php if (!empty($city_state_zip) && !empty($entity_country)) { ?>
                        <br>
                    <?php } ?>
                    <?php if (!empty($entity_country)) { ?>
                        <?php echo $entity_country; ?>
                    <?php } ?>
                </p>

                <h3 class="text-uppercase">
                    The Internet Service Provider (“ISP”)<br>
                    Copyright Agent
                </h3>

                <p>
                    <?php if ($ms_hosting) { ?>
                        WPEngine<br>
                        504 Lavaca Street<br>
                        Suite 1000<br>
                        Austin, TX 78701<br>
                        USA<br>
                        sales@wpengine.com<br>
                        877-973-6446
                    <?php } else { ?>
                        <?php if (!empty($isp_name)) { ?>
                            <?php echo $isp_name; ?><br>
                        <?php } ?>
                        <?php if (!empty($isp_address_line_1)) { ?>
                            <?php echo $isp_address_line_1; ?><br>
                        <?php } ?>
                        <?php if (!empty($isp_address_line_2)) { ?>
                            <?php echo $isp_address_line_2; ?><br>
                        <?php } ?>
                        <?php if (!empty($isp_city_state_zip)) { ?>
                            <?php echo $isp_city_state_zip; ?><br>
                        <?php } ?>
                        <?php if (!empty($isp_country)) { ?>
                            <?php echo $isp_country; ?><br>
                        <?php } ?>
                        <?php if (!empty($isp_email_address)) { ?>
                            <?php echo $isp_email_address; ?><br>
                        <?php } ?>
                        <?php if (!empty($isp_phone_number)) { ?>
                            <?php echo $isp_phone_number; ?>
                        <?php } ?>
                    <?php } ?>

                </p>

                <p>To file a notice of infringement with either the website owner or the ISP, you must provide a written communication that sets forth the items specified below. You will be liable for damages (including damages, costs, and attorneys’ fees) if you materially misrepresent that the website or a web page is infringing your copyright. Accordingly, if you are not sure whether certain material of yours is protected by copyright laws, we suggest that you first contact an attorney.</p>

                <p>To expedite our ability to process your request, please use the following format (including section numbers):</p>

                <ol>
                    <li>Identify in sufficient detail the copyrighted work that you believe has been infringed upon.</li>
                    <li>Identify the material that you claim is infringing the copyrighted work listed in item #1 above. (You must include the URL(s) (the location(s) of the page(s) that contains the allegedly infringing material and also include a description of the specific content which you claim is infringing on your copyright.)</li>
                    <li>Provide information reasonably sufficient to permit the website owner to contact you (e-mail address and a phone number are required at a minimum).</li>
                    <li>Include the following statement: “I swear, under penalty of perjury, that the information in the notification is accurate and that I am the copyright owner or am authorized to act on behalf of the owner of an exclusive right that is allegedly infringed. I also affirm that as the copyright owner, I have a good faith belief that use of the material in the manner complained of is not authorized by me, my agent, or the law.”</li>
                    <li>The signature of the copyright owner or a person authorized to act on behalf of the copyright owner. You may send your notice via email provided such notice includes a proper electronic signature. The signature or electronic signature must be that of the copyright owner, or a person authorized to act on behalf of the owner, of an exclusive copyright that has allegedly been infringed.</li>
                </ol>

                <p>For details on the information required for valid notification, see 17 U.S.C. § 512(c)(3).</p>

                <h3 class="text-uppercase">Counternotification to Claimed Copyright Infringement</h3>

                <p>If a notice of copyright infringement has been filed with the website owner and/or the ISP against you, the owner and/or the ISP will attempt to notify you and provide you with a copy of the notice of copyright infringement. If you have a good faith belief that you have been wrongfully accused, you may file a counternotification with the website owner and/or the ISP. If website owner and/or the ISP receives a valid counternotification, the DMCA provides that the removed or blocked information will be restored or access re-enabled.</p>

                <p>The website owner and/or the ISP will replace the removed material and cease disabling access to it in not less than 10, nor more than 14, business days following receipt of the counternotification, unless the website owner and/or ISP first receives notice from the complaining party that such complaining party has filed an action seeking a court order to restrain the alleged infringer from engaging in infringing activity relating to the material on this website.</p>

                <p>Please be advised that United States copyright law provides substantial penalties for a false counternotice filed in response to a notice of copyright infringement. Accordingly, if you are not sure whether certain material of yours is protected by copyright laws, we suggest that you first contact an attorney.</p>

                <div class="back">
                    <a class="color-primary color-secondary-hover" href="<?php echo site_url() ?>">&lt;&lt; Back to site</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>