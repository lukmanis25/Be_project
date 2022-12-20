from selenium.webdriver.common.by import By

class MainPageLocators(object):
    """A class for main page locators. All main page locators should come here"""

    ZALOGUJ_SIE_BUTTON = (By.XPATH, "//a[@title='Zaloguj się do swojego konta klienta']")
    KOSZULE_BUTTON = (By.XPATH,'//*[@id="category-4"]/a')
    KOSZYK_BUTTON = (By.XPATH, '//*[@id="_desktop_cart"]/div/div/a')

class ZalogujSiePageLocators(object):
    NIE_MASZ_KONTA_BUTTON = (By.LINK_TEXT, "Nie masz konta? Załóż je tutaj")

class StworzKontoPageLocators(object):
    PAN_OPTION = (By.XPATH, '// *[ @ id = "customer-form"] / div / div[1] / div[1] / label[1]')
    CHECKBOX1 = (By.XPATH, '//*[@id="customer-form"]/div/div[8]/div[1]/span/label/input')
    CHECKBOX2 = (By.XPATH, '//*[@id="customer-form"]/div/div[9]/div[1]/span/label/input')
    ZAPISZ_BUTTON = (By.XPATH, '//*[@id="customer-form"]/footer/button')

class KoszulePageLocators(object):
    BLUZY_BUTTON = (By.XPATH, '// *[ @ id = "category-5"] / a')
    KOSZULA1 = (By.XPATH, '//*[@id="js-product-list"]/div[1]/div[1]/article/div/div[2]/h2/a')
    KOSZULA2 = (By.XPATH, '//*[@id="js-product-list"]/div[1]/div[2]/article/div/div[2]/h2/a')
    KOSZULA3 = (By.XPATH, '//*[@id="js-product-list"]/div[1]/div[3]/article/div/div[2]/h2/a')
    KOSZULA4 = (By.XPATH, '//*[@id="js-product-list"]/div[1]/div[4]/article/div/div[2]/h2/a')
    KOSZULA5 = (By.XPATH, '//*[@id="js-product-list"]/div[1]/div[5]/article/div/div[2]/h2/a')

class BluzyPageLocators(object):
    BLUZA1 = (By.XPATH, '//*[@id="js-product-list"]/div[1]/div[1]/article/div/div[2]/h2/a')
    BLUZA2 = (By.XPATH, '//*[@id="js-product-list"]/div[1]/div[2]/article/div/div[2]/h2/a')
    BLUZA3 = (By.XPATH, '//*[@id="js-product-list"]/div[1]/div[3]/article/div/div[2]/h2/a')
    BLUZA4 = (By.XPATH, '//*[@id="js-product-list"]/div[1]/div[4]/article/div/div[2]/h2/a')
    BLUZA5 = (By.XPATH, '//*[@id="js-product-list"]/div[1]/div[5]/article/div/div[2]/h2/a')
    KOSZYK_BUTTON = (By.XPATH, '//*[@id="_desktop_cart"]/div/div/a')

class Koszula1PageLocators(object):
    DODAJ_BUTTON = (By.XPATH, '//*[@id="add-to-cart-or-refresh"]/div[2]/div/div[2]/button')
    ZWIEKSZ_BUTTON = (By.XPATH, '// *[ @ id = "add-to-cart-or-refresh"] / div[2] / div / div[1] / div / span[3] / button[1]')
    KONTYNUUJ_BUTTON =(By.XPATH, '// *[ @ id = "blockcart-modal"] / div / div / div[2] / div / div[2] / div / div / button')
    KOSZULE_BUTTON = (By.XPATH, '//*[@id="category-4"]/a')

class Bluza1PageLocators(object):
    DODAJ_BUTTON = (By.XPATH, '//*[@id="add-to-cart-or-refresh"]/div[2]/div/div[2]/button')
    ZWIEKSZ_BUTTON = (By.XPATH, '// *[ @ id = "add-to-cart-or-refresh"] / div[2] / div / div[1] / div / span[3] / button[1]')
    KONTYNUUJ_BUTTON =(By.XPATH, '// *[ @ id = "blockcart-modal"] / div / div / div[2] / div / div[2] / div / div / button')
    BLUZY_BUTTON = (By.XPATH, '// *[ @ id = "category-5"] / a')


class KoszykPageLocators(object):
    USUN_BUTTON = (By.XPATH, '//*[@id="main"]/div/div[1]/div/div[2]/ul/li/div/div[3]/div/div[3]/div/a')
    MAIN_PAGE_BUTTON = (By.XPATH, '//*[@id="_desktop_logo"]/a')
    REALIZACJA_BUTTON = (By.XPATH, '//*[@id="main"]/div/div[2]/div[1]/div[2]/div/a')

class RealizacjaPageLocators(object):
    DALEJ_BUTTON = (By.XPATH, '//*[@id="delivery-address"]/div/footer/button')
    DALEJ2_BUTTON =(By.XPATH, '// *[ @ id = "js-delivery"] / button')
    KURIER1_BUTTON = (By.XPATH, '//*[@id="delivery_option_5"]')
    PRZY_ODBIORZE_BUTTON = (By.XPATH, '//*[@id="payment-option-2"]')
    ZGODA_BUTTON = (By.XPATH, '//*[@id="conditions_to_approve[terms-and-conditions]"]')
    ZLOZ_ZAMOWIENIE_BUTTON = (By.XPATH, '//*[@id="payment-confirmation"]/div[1]/button')
    KONTO_BUTTON= (By.XPATH, '//*[@id="_desktop_user_info"]/div/a[2]')

class KontoPageLocators(object):
    HISTORIA_BUTTON = (By.XPATH, '//*[@id="history-link"]')




