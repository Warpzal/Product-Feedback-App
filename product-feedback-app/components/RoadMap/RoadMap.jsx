function RoadMap() {
	return (
		<div className="Roadmap roadmap card is-rounded is-block">
			<div className="roadmap__top is-block">
				<h2 className="roadmap__title">Roadmap</h2>
				<a className="roadmap__view" href="#">
					View
				</a>
			</div>
			<div className="roadmap__status-group">
				<div className="roadmap__status">
					<div className="roadmap__status__ball roadmap__status__ball--planned"></div>
					<p className="roadmap__status__title">Planned</p>
				</div>
				<p className="roadmap__status__count">2</p>
			</div>
			<div className="roadmap__status-group">
				<div className="roadmap__status">
					<div className="roadmap__status__ball roadmap__status__ball--in-progress"></div>
					<p className="roadmap__status__title">In-Progress</p>
				</div>
				<p className="roadmap__status__count">3</p>
			</div>
			<div className="roadmap__status-group">
				<div className="roadmap__status">
					<div className="roadmap__status__ball roadmap__status__ball--live"></div>
					<p className="roadmap__status__title">Live</p>
				</div>
				<p className="roadmap__status__count">1</p>
			</div>
		</div>
	)
}

export default RoadMap
