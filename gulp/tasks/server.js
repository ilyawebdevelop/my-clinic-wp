export const server = (done) => {
	app.plugins.browsersync.init({
		server: {
			// Ищем файлы сначала в корне (./), а потом в dist (./dist/)
			baseDir: ["./", `${app.path.build.html}`]
		},
		notify: false,
		port: 3000,
	});
	done();
}