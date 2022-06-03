<?php
use \page\RespTheme\LogInAndLogOut;
use \page\RespTheme\LogoComp;
use \page\RespTheme\LCommonPage;
use \Facebook\WebDriver\Remote\RemoteWebDriver;
use \Facebook\WebDriver\WebDriverBy;
use \Facebook\WebDriver\WebDriverKeys;

class LogoCest
{
    public function _before(RespThemeTester $I, LogInAndLogOut $loginAndLogout,LogoComp $logoComp, LCommonPage $lCommonPage)
    {
        $I->amGoingTo('Login as Admin');
        $loginAndLogout->userLogin($I);
        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
    }
    // tests
    public function desktopLogoLayout(RespThemeTester $I, LogInAndLogOut $loginAndLogout,LogoComp $logoComp, LCommonPage $lCommonPage)
    {
        $I->amGoingTo('check the desktop logo layout settings for logo component');
        $I->selectOption($logoComp->desktopLayout, 'Logo');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(2);
        $I->seeElement($logoComp->deskrow);
        $I->wait(1);

        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->selectOption($logoComp->desktopLayout, 'Logo & Title');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(2);
        $I->seeElement($logoComp->deskrow);
        $I->wait(1);

        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->selectOption($logoComp->desktopLayout, 'Logo, Title & Tagline');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(2);
        $I->seeElement($logoComp->deskrow);
        $I->wait(1);

        $I->amGoingTo('check the tablet logo layout settings for logo component');
        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->tabletview);
        $I->wait(1);
        $I->selectOption($logoComp->tabletLayout, 'Logo');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(2);
        $I->resizeWindow(768, 1024);
        $I->wait(2);
        $I->seeElement($logoComp->tabletrow);
        $I->wait(1);
        $I->resizeWindow(1280, 950);
        $I->wait(2);

        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->tabletview);
        $I->wait(1);
        $I->selectOption($logoComp->tabletLayout, 'Logo & Title');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(2);
        $I->resizeWindow(768, 1024);
        $I->wait(2);
        $I->seeElement($logoComp->tabletrow);
        $I->wait(1);
        $I->resizeWindow(1280, 950);
        $I->wait(2);

        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->tabletview);
        $I->wait(1);
        $I->selectOption($logoComp->tabletLayout, 'Logo, Title & Tagline');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(2);
        $I->resizeWindow(768, 1024);
        $I->wait(2);
        $I->seeElement($logoComp->tabletrow);
        $I->wait(1);
        $I->resizeWindow(1280, 950);
        $I->wait(2);

        $I->amGoingTo('check the mobile logo layout settings for logo component');
        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->mobileView);
        $I->wait(1);
        $I->selectOption($logoComp->mobileLayout, 'Logo');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->resizeWindow(390, 844);
        $I->wait(2);
        $I->seeElement($logoComp->mobilerow);
        $I->resizeWindow(1280, 950);
        $I->wait(2);

        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->mobileView);
        $I->wait(1);
        $I->selectOption($logoComp->mobileLayout, 'Logo & Title');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->resizeWindow(390, 844);
        $I->seeElement($logoComp->mobilerow);
        $I->resizeWindow(1280, 950);
        $I->wait(2);
        
        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->mobileView);
        $I->wait(1);
        $I->selectOption($logoComp->mobileLayout, 'Logo, Title & Tagline');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->resizeWindow(390, 844);
        $I->wait(2);
        $I->seeElement($logoComp->mobilerow);
        $I->resizeWindow(1280, 950);
        $I->wait(2);

        $I->amGoingTo('Logout');
        $loginAndLogout->userLogout($I);
        $I->wait(2);
    }
    public function desktopLogoLayoutStructure(RespThemeTester $I, LogInAndLogOut $loginAndLogout,LogoComp $logoComp, LCommonPage $lCommonPage)
    {
        $I->amGoingTo('check the desktop logo layout structure settings for logo component');
        $I->click($logoComp->desktopView);
        $I->selectOption($logoComp->desktopLayoutStructure, 'Standard');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(2);
        $I->seeElement($logoComp->deskrow);
        $I->wait(1);

        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->desktopView);
        $I->selectOption($logoComp->desktopLayoutStructure, 'Title - Tagline - Logo');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(2);
        $I->seeElement($logoComp->deskrow);
        $I->wait(1);

        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->desktopView);
        $I->selectOption($logoComp->desktopLayoutStructure, 'Top Logo - Title - Tagline');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(2);
        $I->seeElement($logoComp->deskrow);
        $I->wait(1);

        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->desktopView);
        $I->selectOption($logoComp->desktopLayoutStructure, 'Top Title - Tagline - Logo');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(2);
        $I->seeElement($logoComp->deskrow);
        $I->wait(1);

        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->desktopView);
        $I->selectOption($logoComp->desktopLayoutStructure, 'Top Title - Logo - Tagline');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(2);
        $I->seeElement($logoComp->deskrow);
        $I->wait(1);

        $I->amGoingTo('check the tablet logo layout structure settings for logo component');
        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->tabletview);
        $I->wait(1);
        $I->selectOption($logoComp->tabletLayoutStructure, 'Standard');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->resizeWindow(768, 1024);
        $I->seeElement($logoComp->tabletrow);
        $I->wait(1);
        $I->resizeWindow(1280, 950);
        $I->wait(2);

        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->tabletview);
        $I->wait(1);
        $I->selectOption($logoComp->tabletLayoutStructure, 'Title - Tagline - Logo');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->resizeWindow(768, 1024);
        $I->seeElement($logoComp->tabletrow);
        $I->wait(1);
        $I->resizeWindow(1280, 950);
        $I->wait(2);

        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->tabletview);
        $I->wait(1);
        $I->selectOption($logoComp->tabletLayoutStructure, 'Top Logo - Title - Tagline');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->resizeWindow(768, 1024);
        $I->seeElement($logoComp->tabletrow);
        $I->wait(1);
        $I->resizeWindow(1280, 950);
        $I->wait(2);

        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->tabletview);
        $I->wait(1);
        $I->selectOption($logoComp->tabletLayoutStructure, 'Top Title - Tagline - Logo');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->resizeWindow(768, 1024);
        $I->seeElement($logoComp->tabletrow);
        $I->wait(1);
        $I->resizeWindow(1280, 950);
        $I->wait(2);

        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->tabletview);
        $I->wait(1);
        $I->selectOption($logoComp->tabletLayoutStructure, 'Top Title - Logo - Tagline');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(1);
        $I->resizeWindow(768, 1024);
        $I->wait(1);
        $I->seeElement($logoComp->tabletrow);
        $I->wait(1);
        $I->resizeWindow(1280, 950);
        $I->wait(2);

        $I->amGoingTo('check the mobile logo layout structure settings for logo component');
        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->mobileView);
        $I->wait(1);
        $I->selectOption($logoComp->mobileLayoutStructure, 'Standard');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(1);
        $I->resizeWindow(390, 844);
        $I->seeElement($logoComp->mobilerow);
        $I->wait(1);
        $I->resizeWindow(1280, 950);
        $I->wait(1);

        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->mobileView);
        $I->wait(1);
        $I->selectOption($logoComp->mobileLayoutStructure, 'Title - Tagline - Logo');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(1);
        $I->resizeWindow(390, 844);
        $I->wait(1);
        $I->seeElement($logoComp->mobilerow);
        $I->resizeWindow(1280, 950);
        $I->wait(1);

        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->mobileView);
        $I->wait(1);
        $I->selectOption($logoComp->mobileLayoutStructure, 'Top Logo - Title - Tagline');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(1);
        $I->resizeWindow(390, 844);
        $I->wait(1);
        $I->seeElement($logoComp->mobilerow);
        $I->wait(1);
        $I->resizeWindow(1280, 950);
        $I->wait(1);

        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->mobileView);
        $I->wait(1);
        $I->selectOption($logoComp->mobileLayoutStructure, 'Top Title - Tagline - Logo');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(1);
        $I->resizeWindow(390, 844);
        $I->wait(1);
        $I->seeElement($logoComp->mobilerow);
        $I->wait(1);
        $I->resizeWindow(1280, 950);
        $I->wait(1);

        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->mobileView);
        $I->wait(1);
        $I->selectOption($logoComp->mobileLayoutStructure, 'Top Title - Logo - Tagline');
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(1);
        $I->resizeWindow(390, 844);
        $I->wait(1);
        $I->seeElement($logoComp->mobilerow);
        $I->wait(1);
        $I->resizeWindow(1280, 950);
        $I->wait(1);

        $I->amGoingTo('Logout');
        $loginAndLogout->userLogout($I);
        $I->wait(2);
    }
    public function paddingSettings(RespThemeTester $I, LogInAndLogOut $loginAndLogout,LogoComp $logoComp, LCommonPage $lCommonPage)
    {
        $I->amGoingTo('check the desktop padding settings for logo component');
        $I->click($logoComp->desktopView);
        $I->scrollTo($logoComp->paddingSpan);
        $I->click($logoComp->desktopPadding);
        $I->fillField($logoComp->desktopPField, '6');
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(2);
        $lCommonPage->_checkStyle($I,$lCommonPage->desktopPadding,'padding','xpath','6px');
        $I->wait(2);

        $I->amGoingTo('check the tablet padding settings for logo component');
        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->tabletview);
        $I->scrollTo($logoComp->paddingSpan);
        $I->click($logoComp->tabletPadding);
        $I->fillField($logoComp->tabletPField, '5');
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(2);
        $I->resizeWindow(768, 1024);
        $I->wait(2);
        $lCommonPage->_checkStyle($I,$lCommonPage->tabletPadding,'padding','xpath','5px');
        $I->wait(2);
        $I->resizeWindow(1280, 950);
        $I->wait(2);

        $I->amGoingTo('check the mobiile padding settings for logo component');
        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->mobileView);
        $I->scrollTo($logoComp->paddingSpan);
        $I->click($logoComp->mobilePadding);
        $I->fillField($logoComp->mobilePField, '8');
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(2);
        $I->resizeWindow(390, 844);
        $I->wait(1);
        $lCommonPage->_checkStyle($I,$lCommonPage->mobilePadding,'padding','xpath','8px');
        $I->wait(2);
        $I->resizeWindow(1280, 950);
        $I->wait(2);

        $I->amGoingTo('Logout');
        $loginAndLogout->userLogout($I);
        $I->wait(2);
    }
    public function siteColorSettings(RespThemeTester $I, LogInAndLogOut $loginAndLogout,LogoComp $logoComp, LCommonPage $lCommonPage)
    {
        $I->amGoingTo('check the Site Title color settings for logo component');
        $I->click($logoComp->desktopView);
        $I->scrollTo($logoComp->selectSiteTitleColor);
        $I->click($logoComp->selectSiteTitleColor);
        $I->click($logoComp->siteTitleColor);
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(2);
        $lCommonPage->_checkStyle($I,$lCommonPage->siteTitle,'color','xpath','rgb(221, 153, 51)');
        $I->wait(2);

        $I->amGoingTo('check the tablet site title color settings for logo component');
        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->tabletview);
        $I->scrollTo($logoComp->selectSiteTitleTabletColor);
        $I->click($logoComp->selectSiteTitleTabletColor);
        $I->click($logoComp->siteTitleTabletColor);
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(2);
        $I->resizeWindow(768, 1024);
        $I->wait(2);
        $lCommonPage->_checkStyle($I,$lCommonPage->tSiteTitle,'color','xpath','rgb(221, 51, 51)');
        $I->wait(2);
        $I->resizeWindow(1280, 950);
        $I->wait(2);

        $I->amGoingTo('check the mobile site title color settings for logo component');
        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->mobileView);
        $I->scrollTo($logoComp->selectSiteTitleMobileColor);
        $I->click($logoComp->selectSiteTitleMobileColor);
        $I->click($logoComp->siteTitleMobileColor);
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(2);
        $I->resizeWindow(390, 844);
        $I->wait(1);
        $lCommonPage->_checkStyle($I,$lCommonPage->mSiteTitle,'color','xpath','rgb(129, 215, 66)');
        $I->wait(2);
        $I->resizeWindow(1280, 950);
        $I->wait(2);

        $I->amGoingTo('check the desktop Site Title Hover color settings for logo component');
        $I->click($logoComp->url);
        $I->scrollTo($logoComp->header);
        $I->click($logoComp->header);
        $I->click($logoComp->logoButton);
        $I->click($logoComp->desktopView);
        $I->scrollTo($logoComp->selectSiteTitleHoverColor);
        $I->click($logoComp->selectSiteTitleHoverColor);
        $I->click($logoComp->siteTitleHoverColor);
        $I->wait(1);
        $I->click($logoComp->publishButton);
        $I->wait(3);
        $I->switchToIFrame($lCommonPage->frame);
        $I->wait(1);
        $I->moveMouseOver($lCommonPage->title);
        $I->wait(2);
        $I->switchToIFrame();
        $I->amGoingTo('check on the front end');
        $I->amOnPage('/');
        $I->wait(2);
        $I->moveMouseOver($lCommonPage->ftitle);
        $I->wait(2);
        $lCommonPage->_checkStyle($I,$lCommonPage->siteTitleHover,'color','xpath','rgb(255, 255, 255)');
        $I->wait(2);

        $I->amgoingTo('check for tablet view');
        $I->resizeWindow(768, 1024);
        $I->wait(2);
        $I->moveMouseOver($lCommonPage->tTitle);
        $I->wait(2);
        $lCommonPage->_checkStyle($I,$lCommonPage->tSiteTitleHover,'color','xpath','rgb(255, 255, 255)');
        $I->wait(2);
        $I->resizeWindow(1280, 950);
        $I->wait(2);

        $I->amgoingTo('check for mobile view');
        $I->resizeWindow(390, 844);
        $I->wait(2);
        $I->moveMouseOver($lCommonPage->mtitle);
        $I->wait(2);
        $lCommonPage->_checkStyle($I,$lCommonPage->mSiteTitleHover,'color','xpath','rgb(255, 255, 255)');
        $I->wait(2);
        $I->resizeWindow(1280, 950);
        $I->wait(2);

        $I->amGoingTo('Logout');
        $loginAndLogout->userLogout($I);
        $I->wait(2);
    }
    public function typographySettings(RespThemeTester $I, LogInAndLogOut $loginAndLogout,LogoComp $logoComp, LCommonPage $lCommonPage)
    {
       $I->amGoingTo('check the typography settings for logo component');
       $I->scrollTo($logoComp->fontFamily);
       $I->wait(2);
       $I->selectOption($logoComp->fontFamily, 'Times New Roman');
       $I->selectOption($logoComp->fontWeight, 'Normal: 400');
       $I->selectOption($logoComp->fontStyle, 'Italic');
       $I->selectOption($logoComp->textTransform, 'Lowercase');
       $I->fillField($logoComp->fontSize, '21px');
       $I->fillField($logoComp->lineHeight, '3');
       $I->fillField($logoComp->letterSpacing, '3');
       $I->click($logoComp->publishButton);
       $I->wait(4);
       $I->amGoingTo('check on the front end');
       $I->amOnPage('/');
       $I->wait(2);
       $lCommonPage->_checkStyle($I,$lCommonPage->typography,'font-family','xpath','Times New Roman');
       $lCommonPage->_checkStyle($I,$lCommonPage->typography,'font-weight','xpath','400');
       $lCommonPage->_checkStyle($I,$lCommonPage->typography,'font-style','xpath','italic');
       $lCommonPage->_checkStyle($I,$lCommonPage->typography,'text-transform','xpath','lowercase');
       $lCommonPage->_checkStyle($I,$lCommonPage->typography,'font-size','xpath','21px');
       $lCommonPage->_checkStyle($I,$lCommonPage->typography,'line-height','xpath','63px');
       $lCommonPage->_checkStyle($I,$lCommonPage->typography,'letter-spacing','xpath','3px');
       $I->wait(2);

       $I->amGoingTo('Check for tablet view');
       $I->resizeWindow(768, 1024);
       $I->wait(2);
       $lCommonPage->_checkStyle($I,$lCommonPage->typography,'font-family','xpath','Times New Roman');
       $lCommonPage->_checkStyle($I,$lCommonPage->typography,'font-weight','xpath','400');
       $lCommonPage->_checkStyle($I,$lCommonPage->typography,'font-style','xpath','italic');
       $lCommonPage->_checkStyle($I,$lCommonPage->typography,'text-transform','xpath','lowercase');
       $lCommonPage->_checkStyle($I,$lCommonPage->typography,'font-size','xpath','21px');
       $lCommonPage->_checkStyle($I,$lCommonPage->typography,'line-height','xpath','63px');
       $lCommonPage->_checkStyle($I,$lCommonPage->typography,'letter-spacing','xpath','3px');
       $I->resizeWindow(1280, 950);
       $I->wait(2);

       $I->amGoingTo('Check for mobile view');
       $I->resizeWindow(390, 844);
       $I->wait(2);
       $lCommonPage->_checkStyle($I,$lCommonPage->typography,'font-family','xpath','Times New Roman');
       $lCommonPage->_checkStyle($I,$lCommonPage->typography,'font-weight','xpath','400');
       $lCommonPage->_checkStyle($I,$lCommonPage->typography,'font-style','xpath','italic');
       $lCommonPage->_checkStyle($I,$lCommonPage->typography,'text-transform','xpath','lowercase');
       $lCommonPage->_checkStyle($I,$lCommonPage->typography,'font-size','xpath','21px');
       $lCommonPage->_checkStyle($I,$lCommonPage->typography,'line-height','xpath','63px');
       $lCommonPage->_checkStyle($I,$lCommonPage->typography,'letter-spacing','xpath','3px');
       $I->resizeWindow(1280, 950);
       $I->wait(2);

       $I->amGoingTo('Logout');
       $loginAndLogout->userLogout($I);
       $I->wait(2);
       
    }
}

