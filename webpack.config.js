var path = require("path");

module.exports = {
    mode: "development",
    entry: "./src/index.js", // The main entry file, where you import all the different components to be built
    output: {
        path: path.join(__dirname, "dist"),
        filename: "main.js" // The name of the output file, to be linked in the HTML
    },
    module: {
        rules: [
            {
                
                test: /\.s[ac]ss$/i,
                exclude: /node_modules/,
                use: [
                    {
                        loader: 'file-loader',
                        options: {outputPath: './css/', name: 'styles.css'}
                    },
                    'sass-loader'
                ],
            },
            {
                test: /\.php$/,
                exclude: /node_modules/,
                use: [
                    {
                        loader: 'file-loader',
                        options: {name: 'index.php'}
                    },
                ],    
            }

        ]
    }
};
