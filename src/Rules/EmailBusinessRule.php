<?php

namespace OZiTAG\Tager\Backend\Utils\Rules;

use Illuminate\Contracts\Validation\Rule;

class EmailBusinessRule implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $data = 'gmail.com,0-mail.com,027168.com,0815.su,0sg.net,10mail.org,10minutemail.co.za,11mail.com,123.com,123box.net,123india.com,123mail.cl,123mail.org,123qwe.co.uk,126.com,139.com,150mail.com,150ml.com,15meg4free.com,163.com,16mail.com,188.com,189.cn,1ce.us,1chuan.com,1coolplace.com,1freeemail.com,1funplace.com,1internetdrive.com,1mail.ml,1mail.net,1me.net,1mum.com,1musicrow.com,1netdrive.com,1nsyncfan.com,1pad.de,1under.com,1webave.com,1webhighway.com,1zhuan.com,2-mail.com,20email.eu,20mail.in,20mail.it,212.com,21cn.com,24horas.com,2911.net,2980.com,2bmail.co.uk,2d2i.com,2die4.com,2trom.com,3000.it,30minutesmail.com,3126.com,321media.com,33mail.com,37.com,3ammagazine.com,3dmail.com,3email.com,3g.ua,3mail.ga,3xl.net,444.net,4email.com,4email.net,4mg.com,4newyork.com,4warding.net,4warding.org,4x4man.com,50mail.com,60minutemail.com,6ip.us,6mail.cf,6paq.com,74.ru,7mail.ga,7mail.ml,88.am,8848.net,8mail.ga,8mail.ml,97rock.com,99experts.com,a45.in,aaamail.zzn.com,aamail.net,aapt.net.au,aaronkwok.net,abbeyroadlondon.co.uk,abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijk.com,abcflash.net,abdulnour.com,aberystwyth.com,about.com,abusemail.de,abwesend.de,abyssmail.com,ac20mail.in,academycougars.com,acceso.or.cr,access4less.net,accessgcc.com,accountant.com,acdcfan.com,ace-of-base.com,acmemail.net,acninc.net,activist.com,adam.com.au,add3000.pp.ua,addcom.de,address.com,adelphia.net,adexec.com,adfarrow.com,adios.net,adoption.com,ados.fr,adrenalinefreak.com,advalvas.be,advantimo.com,aeiou.pt,aemail4u.com,aeneasmail.com,afreeinternet.com,africamail.com,africamel.net,ag.us.to,agoodmail.com,ahaa.dk,ahk.jp,aichi.com,aim.com,aircraftmail.com,airforce.net,airforceemail.com,airpost.net,ajacied.com,ajaxapp.net,ak47.hu,aknet.kg,albawaba.com,alex4all.com,alexandria.cc,algeria.com,alhilal.net,alibaba.com,alice.it,alive.cz,aliyun.com,allergist.com,allmail.net,alloymail.com,allracing.com,allsaintsfan.com,alpenjodel.de,alphafrau.de,alskens.dk,altavista.com,altavista.net,altavista.se,alternativagratis.com,alumni.com,alumnidirector.com,alvilag.hu,amail.com,amazonses.com,amele.com,america.hm,ameritech.net,amnetsal.com,amorki.pl,amrer.net,amuro.net,amuromail.com,ananzi.co.za,andylau.net,anfmail.com,angelfire.com,angelic.com,animail.net,animalhouse.com,animalwoman.net,anjungcafe.com,annsmail.com,ano-mail.net,anonmails.de,anonymous.to,anote.com,another.com,anotherdomaincyka.tk,anotherwin95.com,anti-social.com,antisocial.com,antispam24.de,antongijsen.com,antwerpen.com,anymoment.com,anytimenow.com,aol.com,aon.at,apexmail.com,apmail.com,apollo.lv,aport.ru,aport2000.ru,appraiser.net,approvers.net,arabia.com,arabtop.net,archaeologist.com,arcor.de,arcotronics.bg,arcticmail.com,argentina.com,aristotle.org,army.net,armyspy.com,arnet.com.ar,art-en-ligne.pro,artlover.com,artlover.com.au,as-if.com,asdasd.nl,asean-mail.com,asheville.com,asia-links.com,asia-mail.com,asiafind.com,asianavenue.com,asiancityweb.com,asiansonly.net,asianwired.net,asiapoint.net,ass.pp.ua,assala.com,assamesemail.com,astroboymail.com,astrolover.com,astrosfan.com,astrosfan.net,asurfer.com,atheist.com,athenachu.net,atina.cl,atl.lv,atlaswebmail.com,atmc.net,atozasia.com,atrus.ru,att.net,attglobal.net,attymail.com,au.ru,auctioneer.net,ausi.com,aussiemail.com.au,austin.rr.com,australia.edu,australiamail.com,austrosearch.net,autoescuelanerja.com,autograf.pl,autorambler.ru,aver.com,avh.hu,avia-tonic.fr,awsom.net,axoskate.com,ayna.com,azazazatashkent.tk,azimiweb.com,azmeil.tk,bachelorboy.com,bachelorgal.com,backpackers.com,backstreet-boys.com,backstreetboysclub.com,bagherpour.com,baldmama.de,baldpapa.de,ballyfinance.com,bangkok.com,bangkok2000.com,bannertown.net,baptistmail.com,baptized.com,barcelona.com,bareed.ws,bartender.net,baseballmail.com,basketballmail.com,batuta.net,baudoinconsulting.com,bboy.zzn.com,bcvibes.com,beddly.com,beeebank.com,beenhad.com,beep.ru,beer.com,beethoven.com,belice.com,belizehome.com,bell.net,bellair.net,bellsouth.net,berlin.com,berlin.de,berlinexpo.de,bestmail.us,betriebsdirektor.de,bettergolf.net,bharatmail.com,big1.us,bigassweb.com,bigblue.net.au,bigboab.com,bigfoot.com,bigfoot.de,bigger.com,biggerbadder.com,bigmailbox.com,bigmir.net,bigpond.au,bigpond.com,bigpond.com.au,bigpond.net,bigpond.net.au,bigramp.com,bigstring.com,bikemechanics.com,bikeracer.com,bikeracers.net,bikerider.com,billsfan.com,billsfan.net,bimla.net,bin-wieder-da.de,bio-muesli.info,birdlover.com,birdowner.net,bisons.com,bitmail.com,bitpage.net,bizhosting.com,bk.ru,blackburnmail.com,blackplanet.com,blader.com,bladesmail.net,blazemail.com,bleib-bei-mir.de,blockfilter.com,blogmyway.org,bluebottle.com,bluehyppo.com,bluemail.ch,bluemail.dk,bluesfan.com,bluewin.ch,blueyonder.co.uk,blushmail.com,blutig.me,bmlsports.net,boardermail.com,boatracers.com,bodhi.lawlita.com,bol.com.br,bolando.com,bollywoodz.com,boltonfans.com,bombdiggity.com,bonbon.net,boom.com,bootmail.com,bootybay.de,bornnaked.com,bostonoffice.com,boun.cr,bounce.net,bounces.amazon.com,bouncr.com,box.az,box.ua,boxbg.com,boxemail.com,boxformail.in,boxfrog.com,boximail.com,boyzoneclub.com,bradfordfans.com,brasilia.net,brazilmail.com,brazilmail.com.br,breadtimes.press,breathe.com,brennendesreich.de,bresnan.net,brew-master.com,brew-meister.com,brfree.com.br,briefemail.com,bright.net,britneyclub.com,brittonsign.com,broadcast.net,brokenvalve.com,brusseler.com,bsdmail.com,btcmail.pw,btconnect.co.uk,btconnect.com,btinternet.com,btopenworld.co.uk,buerotiger.de,buffymail.com,bullsfan.com,bullsgame.com,bumerang.ro,bumpymail.com,bund.us,burnthespam.info,burstmail.info,buryfans.com,business-man.com,businessman.net,busta-rhymes.com,buyersusa.com,bvimailbox.com,byom.de,c2.hu,c2i.net,c3.hu,c4.com,c51vsgq.com,cabacabana.com,cable.comcast.com,cableone.net,caere.it,cairomail.com,calendar-server.bounces.google.com,calidifontain.be,californiamail.com,callnetuk.com,callsign.net,caltanet.it,camidge.com,canada-11.com,canada.com,canadianmail.com,canoemail.com,canwetalk.com,caramail.com,care2.com,careerbuildermail.com,carioca.net,cartelera.org,cartestraina.ro,casablancaresort.com,casema.nl,cash4u.com,cashette.com,casino.com,catcha.com,catchamail.com,catholic.org,catlover.com,cd2.com,celineclub.com,celtic.com,center-mail.de,centermail.at,centermail.de,centermail.info,centoper.it,centralpets.com,centrum.cz,centrum.sk,centurytel.net,certifiedmail.com,cfl.rr.com,cgac.es,cghost.s-a-d.de,chacuo.net,chaiyomail.com,chammy.info,chance2mail.com,chandrasekar.net,charmedmail.com,charter.net,chat.ru,chattown.com,chauhanweb.com,cheatmail.de,chechnya.conf.work,check.com,check1check.com,cheerful.com,chef.net,chek.com,chello.nl,chemist.com,chequemail.com,cheyenneweb.com,chez.com,chickmail.com,china.com,china.net.vg,chinamail.com,chirk.com,chocaholic.com.au,chong-mail.com,chong-mail.net,churchusa.com,cia-agent.com,cia.hu,ciaoweb.it,cicciociccio.com,cincinow.net,cinci.rr.comcitiz.net,citlink.net,citromail.hu,city-of-bath.org,city-of-birmingham.com,city-of-brighton.org,city-of-cambridge.com,city-of-coventry.com,city-of-edinburgh.com,city-of-lichfield.com,city-of-lincoln.com,city-of-liverpool.com,city-of-manchester.com,city-of-nottingham.com,city-of-oxford.com,city-of-swansea.com,city-of-westminster.com,city-of-westminster.net,city-of-york.net,cityofcardiff.net,cityoflondon.org,ckaazaza.tk,claramail.com,classicalfan.com,classicmail.co.za,clear.net.nz,clearwire.net,clerk.com,cliffhanger.com,clixser.com,close2you.net,clrmail.com,club4x4.net,clubalfa.com,clubbers.net,clubducati.com,clubhonda.net,clubmember.org,clubnetnoir.com,clubvdo.net,cluemail.com,cmail.net,cmpmail.com,cnnsimail.com,cntv.cn,codec.ro,coder.hu,coid.biz,coldmail.com,collectiblesuperstore.com,collector.org,collegeclub.com,collegemail.com,colleges.com,columbus.rr.com,columbusrr.com,columnist.com,comcast.net,comic.com,communityconnect.com,comporium.net,comprendemail.com,compuserve.com,computer-freak.com,computer4u.com,computermail.net,conexcol.com,conk.com,connect4free.net,connectbox.com,consultant.com,consumerriot.com,contractor.net,contrasto.cu.cc,cookiemonster.com,cool.br,coole-files.de,coolgoose.ca,coolgoose.com,coolkiwi.com,coollist.com,coolmail.com,coolmail.net,coolsend.com,coolsite.net,cooooool.com,cooperation.net,cooperationtogo.net,copacabana.com,copper.net,cornells.com,cornerpub.com,corporatedirtbag.com,correo.terra.com.gt,cortinet.com,cotas.net,counsellor.com,countrylover.com,cox.com,cox.net,coxinet.net,cracker.hu,crapmail.org,crazedanddazed.com,crazymailing.com,crazysexycool.com,cristianemail.com,critterpost.com,croeso.com,crosshairs.com,crosswinds.net,crwmail.com,cry4helponline.com,cs.com,csinibaba.hu,cuemail.com,curio-city.com,curryworld.de,cute-girl.com,cuteandcuddly.com,cutey.com,cww.de,cyber-africa.net,cyber-innovation.club,cyber-matrix.com,cyber-phone.eu,cyber-wizard.com,cyber4all.com,cyberbabies.com,cybercafemaui.com,cyberdude.com,cyberforeplay.net,cybergal.com,cybergrrl.com,cyberinbox.com,cyberleports.com,cybermail.net,cybernet.it,cyberservices.com,cyberspace-asia.com,cybertrains.org,cyclefanz.com,cynetcity.com,dabsol.net,dadacasa.com,daha.com,dailypioneer.com,dallasmail.com,dangerous-minds.com,dansegulvet.com,dasdasdascyka.tk,data54.com,davegracey.com,dawnsonmail.com,dawsonmail.com,dazedandconfused.com,dbzmail.com,dcemail.com,deadlymob.org,deagot.com,deal-maker.com,dearriba.com,death-star.com,deliveryman.com,deneg.net,depechemode.com,deseretmail.com,desertmail.com,desilota.com,deskpilot.com,destin.com,detik.com,deutschland-net.com,devotedcouples.com,dezigner.ru,dfwatson.com,di-ve.com,die-besten-bilder.de,die-genossen.de,die-optimisten.de,die-optimisten.net,diemailbox.de,digibel.be,digital-filestore.de,diplomats.com,directbox.com,dirtracer.com,discard.email,discard.ga,discard.gq,disciples.com,discofan.com,discoverymail.com,disign-concept.eu,disign-revelation.com,disinfo.net,dispomail.eu,disposable.com,dispose.it,dm.w3internet.co.uk,dmailman.com,dnainternet.net,dnsmadeeasy.com,doclist.bounces.google.com,docmail.cz,docs.google.com,doctor.com,dodgit.org,dodo.com.au,dodsi.com,dog.com,dogit.com,doglover.com,dogmail.co.uk,dogsnob.net,doityourself.com,domforfb1.tk,domforfb2.tk,domforfb3.tk,domforfb4.tk,domforfb5.tk,domforfb6.tk,domforfb7.tk,domforfb8.tk,domozmail.com,doneasy.com,donjuan.com,dontgotmail.com,dontmesswithtexas.com,doramail.com,dostmail.com,dotcom.fr,dotmsg.com,dott.it,download-privat.de,dplanet.ch,dr.com,dragoncon.net,dropmail.me,dropzone.com,drotposta.hu,dubaimail.com,dublin.com,dublin.ie,dumpmail.com,dumpmail.de,dumpyemail.com,dunlopdriver.com,dunloprider.com,duno.com,duskmail.com,dutchmail.com,dwp.net,dygo.com,dynamitemail.com,dyndns.org,e-apollo.lv,e-mail.com.tr,e-mail.dk,e-mail.ru,e-mail.ua,e-mailanywhere.com,e-mails.ru,e-tapaal.com,earthalliance.com,earthcam.net,earthdome.com,earthling.net,earthlink.net,earthonline.net,eastcoast.co.za,eastmail.com,easy.to,easypost.com,easytrashmail.com,ec.rr.com,ecardmail.com,ecbsolutions.net,echina.com,ecolo-online.fr,ecompare.com,edmail.com,ednatx.com,edtnmail.com,educacao.te.pt,eelmail.com,ehmail.com,einrot.com,einrot.de,eintagsmail.de,eircom.net,elisanet.fi,elitemail.org,elsitio.com,elvis.com,elvisfan.com,email-fake.gq,email-london.co.uk,email.biz,email.cbes.net,email.com,email.cz,email.ee,email.it,email.nu,email.org,email.ro,email.ru,email.si,email.su,email.ua,email2me.net,email4u.info,emailacc.com,emailaccount.com,emailage.ga,emailage.gq,emailasso.net,emailchoice.com,emailcorner.net,emailem.com,emailengine.net,emailengine.org,emailer.hubspot.com,emailforyou.net,emailgo.de,emailgroups.net,emailinfive.com,emailit.com,emailpinoy.com,emailplanet.com,emailplus.org,emailproxsy.com,emails.ga,emails.incisivemedia.com,emails.ru,emailthe.net,emailto.de,emailuser.net,emailx.net,emailz.ga,emailz.gq,ematic.com,embarqmail.com,emeil.in,emeil.ir,emil.com,eml.cc,eml.pp.ua,end-war.com,enel.net,engineer.com,england.com,england.edu,englandmail.com,epage.ru,epatra.com,ephemail.net,epix.net,epost.de,eposta.hu,eqqu.com,eramail.co.za,eresmas.com,eriga.lv,estranet.it,ethos.st,etoast.com,etrademail.com,etranquil.com,etranquil.net,eudoramail.com,europamel.net,europe.com,europemail.com,euroseek.com,eurosport.com,every1.net,everyday.com.kh,everymail.net,everyone.net,everytg.ml,examnotes.net,excite.co.jp,excite.com,excite.it,execs.com,exemail.com.au,exg6.exghost.com,existiert.net,expressasia.com,extenda.net,extended.com,eyepaste.com,eyou.com,ezcybersearch.com,ezmail.egine.com,ezmail.ru,ezrs.com,f-m.fm,f1fans.net,facebook-email.ga,facebook.com,facebookmail.com,facebookmail.gq,fahr-zur-hoelle.org,fake-email.pp.ua,fake-mail.cf,fake-mail.ga,fake-mail.ml,fakemailz.com,falseaddress.com,fan.com,fansonlymail.com,fansworldwide.de,fantasticmail.com,farang.net,farifluset.mailexpire.com,faroweb.com,fast-email.com,fast-mail.fr,fast-mail.org,fastacura.com,fastchevy.com,fastchrysler.com,fastem.com,fastemail.us,fastemailer.com,fastermail.com,fastest.cc,fastimap.com,fastkawasaki.com,fastmail.ca,fastmail.cn,fastmail.co.uk,fastmail.com,fastmail.com.au,fastmail.es,fastmail.fm,fastmail.im,fastmail.in,fastmail.jp,fastmail.mx,fastmail.net,fastmail.nl,fastmail.se,fastmail.to,fastmail.tw,fastmail.us,fastmailbox.net,fastmazda.com,fastmessaging.com,fastmitsubishi.com,fastnissan.com,fastservice.com,fastsubaru.com,fastsuzuki.com,fasttoyota.com,fastyamaha.com,fatcock.net,fatflap.com,fathersrightsne.org,fax.ru,fbi-agent.com,fbi.hu,fdfdsfds.com,fea.st,federalcontractors.com,feinripptraeger.de,felicitymail.com,femenino.com,fetchmail.co.uk,fettabernett.de,feyenoorder.com,ffanet.com';
        $validEmails = explode(',', $data);

        $p = strrpos($value, '@');
        if ($p === false) {
            return true;
        }

        $domain = trim(strtolower(substr($value, $p + 1)));

        return in_array($domain, $validEmails) == false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute is not valid business email';
    }
}
