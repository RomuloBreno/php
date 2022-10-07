import sys
import urllib.request
import requests
site = sys.argv[1]

def clone (url):
    a = urllib.request.Request(url="https://"+url, headers={'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36'})

    responseT = urllib.request.urlopen(a)
    html = str(responseT.read())

    c = open('teste.php', 'w')
    print(html, file=c)

clone (site)
