#
echo "Ingrese url de github:"
read urlGithub
echo "# practica01" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin ${urlGithub}
git push -u origin main
echo $'\e[0;31m'se ejecuto corectamente en inicio de git con github$'\e[0m'
read -p $'\e[33m'"Press [Enter] key to continue..."$'\e[0m' foo