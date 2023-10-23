# plumbing_web
tnrplumbinginc.come
Plumbing Website

Using Firebase
New DOMAIN: tnrplumbinginc.com


1. Install Node.js

2. Install firebase tools
    $npm install -g firebase-tools

3. Start
    $firebase login
        - Just log in

4. Initialize
    $firebase init
        - initialize firebase project
            - answer questions
            - links project with backend firebase project
            - No for single pages
            - Now we get all the firebase stuff, index, 404, etc.. put everything for web in public folder
            - Good to Test it out (Website Testing)

5. Deploy (DO THIS FOR ANY CHANGE IN FUTURE TOO)
    $firebase deploy
    - deploys website
        - Project console: is firebase console
        - Hosting URL: which is the site

6. Website Testing
    $firebase serve
    -opens a live server
    -you can make live changes and refresh

FINDING DOMAINS:
    First two domains accesses webset
    Add Custom Domain:
        -Write it in Add Custom Domain (put all info in the DNS of purchased Domain)
        -Go to DNS Setting where you got domain from (GOOGLE DOMAINS)
        -Create new Custom Record (4 inputs)
            -Custom domain
            - 'A'
            -Default
            -Copy what firebase gave you into it
